<?php

namespace App\Http\Livewire\Form;

use App\Events\RegisteredContact;
use App\Http\Traits\IdentityTrait;
use App\Models\Contact;
use App\Models\Identity;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;

class Register extends Component
{
    use IdentityTrait;

    /**
     * @var Contact $contact
     */

    public $contact;
    /**
     * Rule form inscription form
     * @var array
     */
    protected $rules = [
        'contact.name'  => ['required','regex:/^[a-zA-Z -]+$/','min:3'],
        'contact.phone' => ['required','string','regex:/^(?:(?:(?:\+|00)33[ ]?(?:\(0\)[ ]?)?)|0){1}[1-9]{1}([ .-]?)(?:\d{2}\1?){3}\d{2}$/'],
        'contact.email' => 'required|email|max:255',
    ];

    /**
     * Errors message
     * @var array
     */
    protected $messages = [
        'contact.name.required'     => 'Nous avons besoin de votre Nom et Prénom.',
        'contact.name.regex'        => "Merci d'indiquer votre vrai Nom et Prénom.",
        'contact.name.min'          => "Merci d'indiquer votre vrai Nom et Prénom.",
        'contact.phone.regex'       => "Merci d'indiquer votre vrai numéro de téléphone.",
        'contact.phone.string'      => "Merci d'indiquer votre vrai numéro de téléphone.",
        'contact.phone.required'    => "Nous avons besoin de votre numéro de téléphone.",
        'contact.email.required'    => "Nous avons besoin de votre adresse e-mail.",
        'contact.email.email'       => "Merci d'indiquer votre vrai adresse e-mail.",
    ];

    public function mount()
    {
        $this->contact = new Contact();
    }

    public function render()
    {
        return view('livewire.form.register');
    }

    /**
     * Save Contact
     */

    public function save()
    {
        $this->validate();
        $contact = $this->exist($this->contact->phone);

        if ($contact) {
            if ($this->contact->email != $contact->email) {
                // verification update email for notification
                $this->notify($contact);
            }
            $this->update($contact);
        }
        else{
            $contact = $this->create();
            // notification
            $this->notify($contact);
        }
    }

    private function exist($phone)
    {
        return Contact::where('phone',$phone)->first();
    }

    private function create()
    {
        $contact = Contact::create(
            [
                'email'         => $this->contact->email,
                'name'          => $this->contact->name,
                'phone'         => $this->contact->phone,
                'identity_id'   => $this->getIdentity()->id
            ]);
        $this->emit('formChanged');

        return $contact;
    }

    private function update($contact)
    {
        $contact->update([
            'email'         => $this->contact->email,
            'name'          => $this->contact->name,
            'identity_id'   => $this->getIdentity()->id
        ]);

        $this->emit('formChanged');
    }

    private function notify($contact)
    {
        event(new RegisteredContact($contact));
    }

}
