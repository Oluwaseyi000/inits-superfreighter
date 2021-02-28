<?php

namespace App\Listeners;

use App\Mail\OrderPlacedMailable;
use App\Events\NewOrderPlacedEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\OrderPlacedNotification;

class NewOrderPlacedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewOrderPlacedEvent  $event
     * @return void
     */
    public function handle(NewOrderPlacedEvent $event)
    {
        Mail::to($event->order->user_ip_address)->cc('superfreighters@mailinator.com')->send(new OrderPlacedMailable($event->order));
    }
}
