<?php

namespace App\Listeners;

use App\Mail\ConfirmUserMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class UserRegistered
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
     * @param Registered $event
     */
    public function handle(Registered $event)
    {
        Mail::to($event->user->email)->send(new ConfirmUserMail($event->user));
    }
}
