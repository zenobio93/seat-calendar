<?php

namespace Seat\Kassie\Calendar\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use Seat\Kassie\Calendar\Helpers\Helper;
use Seat\Kassie\Calendar\Http\Validation\SettingsValidation;
use Seat\Kassie\Calendar\Models\Tag;
use Seat\Notifications\Models\Integration;
use Seat\Services\Exceptions\SettingException;
use Seat\Web\Http\Controllers\Controller;
use SocialiteProviders\Manager\Config;

/**
 * Class SettingController.
 *
 * @package Seat\Kassie\Calendar\Http\Controllers
 */
class SettingController extends Controller
{
    final public const DISCORD_SCOPES = [
        'bot', 'identify', 'guilds.join',
    ];

    final public const DISCORD_BOT_PERMISSIONS = [
        'MANAGE_EVENTS' => 0x200000000,
        'CREATE_EVENTS' => 0x100000000000
    ];

    /**
     * @return Factory|View
     */
    public function index(): Factory|View
    {
        $tags = Tag::all();
        $notification_channels = Integration::where('type', 'slack')->get();

        return view('calendar::setting.index', [
            'tags' => $tags,
            'slack_integrations' => $notification_channels,
        ]);
    }

    /**
     * @param SettingsValidation $request
     * @return RedirectResponse
     * @throws SettingException
     */
    public function updateNotificationSettings(SettingsValidation $request): RedirectResponse
    {
        setting(['kassie.calendar.notify_create_operation', (bool)$request->notify_create_operation], true);
        setting(['kassie.calendar.notify_update_operation', (bool)$request->notify_update_operation], true);
        setting(['kassie.calendar.notify_cancel_operation', (bool)$request->notify_cancel_operation], true);
        setting(['kassie.calendar.notify_activate_operation', (bool)$request->notify_activate_operation], true);
        setting(['kassie.calendar.notify_end_operation', (bool)$request->notify_end_operation], true);
        setting(['kassie.calendar.notify_operation_interval', $request['notify_operation_interval']], true);
        setting(['kassie.calendar.slack_emoji_importance_full', $request['slack_emoji_importance_full']], true);
        setting(['kassie.calendar.slack_emoji_importance_half', $request['slack_emoji_importance_half']], true);
        setting(['kassie.calendar.slack_emoji_importance_empty', $request['slack_emoji_importance_empty']], true);

        return redirect()->back();
    }

    /**
     * @throws SettingException
     */
    public function updateDiscord(SettingsValidation $request): RedirectResponse
    {
        setting(['kassie.calendar.discord_integration', (bool)$request->input('discord_integration')], true);
        setting(['kassie.calendar.discord_client_id', (string)$request->input('discord_client_id')], true);
        setting(['kassie.calendar.discord_client_secret', (string)$request->input('discord_client_secret')], true);
        setting(['kassie.calendar.discord_bot_token', (string)$request->input('discord_bot_token')], true);

        if (setting('kassie.calendar.discord_integration', true)) {
            $redirect_uri = route('setting.discord.registration.callback');
            Log::debug("redirect uri is $redirect_uri");
            $config = new Config(setting('kassie.calendar.discord_client_id', true), setting('kassie.calendar.discord_client_secret', true), $redirect_uri);

            return Socialite::driver('discord')
                ->with([
                    'permissions' => Helper::arrayBitwiseOr(self::DISCORD_BOT_PERMISSIONS),
                ])->setConfig($config)
                ->setScopes(self::DISCORD_SCOPES)
                ->redirect();
        }

        return redirect()->route('calendar::setting.index')
            ->with('success', 'Discord settings has been successfully updated.');
    }

    /**
     * @throws SettingException
     */
    public function handleDiscordCallback(): RedirectResponse
    {
        $redirect_uri = route('setting.discord.registration.callback');
        $config = new Config(setting('kassie.calendar.discord_client_id', true), setting('kassie.calendar.discord_client_secret', true), $redirect_uri);

        $socialite_user = Socialite::driver('discord')->setConfig($config)->user();
        setting(['kassie.calendar.discord_guild_id', $socialite_user->accessTokenResponseBody['guild']['id']], true);
        setting(['kassie.calendar.discord_owner_id', $socialite_user->accessTokenResponseBody['guild']['owner_id']], true);

        return redirect()->route('setting.index')
            ->with('success', 'Discord settings has been successfully updated.');
    }
}
