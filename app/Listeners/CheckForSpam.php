<?php

namespace App\Listeners;

use App\Events\ThreadCreated;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckForSpam implements ShouldQueue
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
        var_dump('Checking for spam');
    }
}
