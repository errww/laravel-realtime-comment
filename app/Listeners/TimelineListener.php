<?php

namespace App\Listeners;

use App\Events\TimelineEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TimelineListener
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
     * @param  TimelineEvent  $event
     * @return void
     */
    public function handle(TimelineEvent $event)
    {
        //
    }
}
