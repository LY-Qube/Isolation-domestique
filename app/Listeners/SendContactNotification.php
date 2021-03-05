<?php

namespace App\Listeners;

use App\Events\RegisteredContact;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendContactNotification
{

    /**
     * Handle the event.
     *
     * @param  RegisteredContact  $event
     * @return void
     */
    public function handle(RegisteredContact $event)
    {
        $event->contact->sendEmailVerificationNotification();
    }
}
