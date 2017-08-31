<?php

namespace App\Listeners;

use App\Events\ThreadCreated;

class NotifySubscribers
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
     * @param  ThreadCreated  $event
     * @return void
     */
    public function handle(ThreadCreated $event)
    {
        var_dump($event->thread['name']. ' was published to the forum.');
    }
}
