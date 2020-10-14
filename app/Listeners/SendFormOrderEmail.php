<?php

namespace App\Listeners;

use App\Events\LeadFormSubmitted;
use App\Mail\OrderReceived;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail as Mail;

class SendFormOrderEmail
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
     * @param  object  $event
     * @return void
     */
    public function handle(LeadFormSubmitted $event)
    {
        Mail::to('okna@aliro.ru')->send(new OrderReceived($event->data));
    }
}
