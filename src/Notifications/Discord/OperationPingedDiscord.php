<?php

namespace Seat\Kassie\Calendar\Notifications\Discord;

use Illuminate\Queue\SerializesModels;
use Seat\Kassie\Calendar\Helpers\Helper;
use Seat\Kassie\Calendar\Models\Operation;
use Seat\Notifications\Notifications\AbstractDiscordNotification;
use Seat\Notifications\Services\Discord\Messages\DiscordMessage;

class OperationPingedDiscord extends AbstractDiscordNotification
{
    use SerializesModels;

    private Operation $operation;

    public function __construct(Operation $operation)
    {
        $this->operation = $operation;
    }

    protected function populateMessage(DiscordMessage $message, $notifiable): void
    {
        $message
            ->success()
            ->from('SeAT Calendar', config('buyback.discord.webhook.logoUrl'))
            ->content(trans('calendar::notifications.notification_ping_operation').'*'.trans('calendar::seat.starts_in').' '.$this->operation->getStartsInAttribute().'*')
            ->embed(Helper::BuildDiscordOperationEmbed($this->operation));
    }
}
