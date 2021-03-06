<?php

namespace App\Http\Livewire\Ebook;

use App\Http\Traits\IdentityTrait;
use App\Models\Contact;
use App\Models\Identity as IdentityModel;
use App\Notifications\BookNotification;
use Livewire\Component;
use Illuminate\Support\Facades\Notification;

class EbookForm extends Component
{
    use IdentityTrait;
    /**
     * @var Contact
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
        'contact.name.required'     => 'Nous Avons Besoin de Votre Nom et Prénom.',
        'contact.name.regex'        => "Merci D'indiquer Votre Vrai Nom et Prénom.",
        'contact.name.min'          => "Merci D'indiquer Votre Vrai Nom et Prénom.",
        'contact.phone.regex'       => "Merci D'indiquer Votre Vrai Numéro de Téléphone.",
        'contact.phone.string'      => "Merci D'indiquer Votre Vrai Numéro de Téléphone.",
        'contact.phone.required'    => "Nous Avons Besoin de Votre Numéro de Téléphone.",
        'contact.email.required'    => "Nous Avons Besoin de Votre Adresse E-mail.",
        'contact.email.email'       => "Merci D'indiquer Votre Vrai Adresse E-mail.",
    ];

    public function render()
    {
        return view('livewire.ebook.ebook-form');
    }

    public function mount() {
        $this->contact = new Contact();
    }

    public function save()
    {
        $this->validate();
        $this->contact->identity_id = $this->getIdentity()->id;
        $this->contact->save();
        // send emaill
        $this->contact->notify(new BookNotification());
        // message success
        session()->flash('success', 'Votre E-book est envoyer a votre boîte mail');
        // redirect to homer
        redirect()->route('welcome');
    }

}
