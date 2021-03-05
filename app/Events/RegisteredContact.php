<?php

namespace App\Events;

use App\Models\Contact;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RegisteredContact
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The authenticated user.
     *
     * @var Contact
     */
    public $contact;

    /**
     * Create a new event instance.
     *
     * @param $contact
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }
}
