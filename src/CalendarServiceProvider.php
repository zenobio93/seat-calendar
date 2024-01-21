<?php

namespace Seat\Kassie\Calendar;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Event;
use Seat\Kassie\Calendar\Commands\RemindOperation;
use Seat\Kassie\Calendar\Commands\SyncDiscordUsers;
use Seat\Kassie\Calendar\Models\Operation;
use Seat\Kassie\Calendar\Observers\OperationObserver;
use Seat\Services\AbstractSeatPlugin;
use SocialiteProviders\Manager\SocialiteWasCalled;

/**
 * Class CalendarServiceProvider.
 * @package Seat\Kassie\Calendar
 */
class CalendarServiceProvider extends AbstractSeatPlugin
{
    public function boot(): void
    {
        $this->addCommands();
        $this->addRoutes();
        $this->addViews();
        $this->addTranslations();
        $this->addMigrations();
        $this->addPublications();
        $this->addObservers();

        $this->registerSocialiteDiscordDriver();

        $this->app->booted(function (): void {
            $schedule = $this->app->make(Schedule::class);
            $schedule->command('calendar:remind')->everyMinute();
        });
    }

    private function addCommands(): void
    {
        $this->commands([
            RemindOperation::class,
            SyncDiscordUsers::class
        ]);
    }

    private function addRoutes(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
    }

    private function addViews(): void
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'calendar');
    }

    private function addTranslations(): void
    {
        $this->loadTranslationsFrom(__DIR__ . '/resources/lang', 'calendar');
    }

    private function addMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    private function addPublications(): void
    {
        $this->publishes([
            __DIR__ . '/resources/assets/css' => public_path('web/css'),
            __DIR__ . '/resources/assets/vendors/css' => public_path('web/css'),
            __DIR__ . '/resources/assets/js' => public_path('web/js'),
            __DIR__ . '/resources/assets/vendors/js' => public_path('web/js'),
        ]);
    }

    private function addObservers(): void
    {
        Operation::observe(OperationObserver::class);
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/notifications.alerts.php', 'notifications.alerts');

        $this->mergeConfigFrom(__DIR__ . '/Config/package.sidebar.php', 'package.sidebar');
        $this->mergeConfigFrom(__DIR__ . '/Config/calendar.character.menu.php', 'package.character.menu');
        $this->mergeConfigFrom(__DIR__ . '/Config/calendar.corporation.menu.php', 'package.corporation.menu');

        $this->registerPermissions(__DIR__ . '/Config/Permissions/calendar.php', 'calendar');
        $this->registerPermissions(__DIR__ . '/Config/Permissions/character.php', 'character');
        $this->registerPermissions(__DIR__ . '/Config/Permissions/corporation.php', 'corporation');
    }

    private function registerSocialiteDiscordDriver(): void
    {
        Event::listen(SocialiteWasCalled::class, 'SocialiteProviders\\Discord\\DiscordExtendSocialite@handle');
    }

    /**
     * Return the plugin public name as it should be displayed into settings.
     *
     * @return string
     * @example SeAT Web
     *
     */
    public function getName(): string
    {
        return 'Calendar';
    }

    /**
     * Return the plugin repository address.
     *
     * @example https://github.com/eveseat/web
     *
     * @return string
     */
    public function getPackageRepositoryUrl(): string
    {
        return 'https://github.com/hermesdj/seat-calendar';
    }

    /**
     * Return the plugin technical name as published on package manager.
     *
     * @return string
     * @example web
     *
     */
    public function getPackagistPackageName(): string
    {
        return 'seat-calendar';
    }

    /**
     * Return the plugin vendor tag as published on package manager.
     *
     * @return string
     * @example eveseat
     *
     */
    public function getPackagistVendorName(): string
    {
        return 'hermesdj';
    }
}
