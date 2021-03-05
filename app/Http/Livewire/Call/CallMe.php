<?php

namespace App\Http\Livewire\Call;

use App\Http\Traits\IdentityTrait;
use App\Models\Call;
use App\Models\Contact;
use App\Notifications\CallNotification;
use Livewire\Component;

class CallMe extends Component
{

    use IdentityTrait;

    /**
     * @var Call $call
     */
    public $call;


    /**
     * Rule form inscription form
     * @var array
     */
    protected $rules = [
        'call.name' => ['required', 'regex:/^[a-zA-Z -]+$/', 'min:3'],
        'call.phone' => ['required', 'string', 'regex:/^(?:(?:(?:\+|00)33[ ]?(?:\(0\)[ ]?)?)|0){1}[1-9]{1}([ .-]?)(?:\d{2}\1?){3}\d{2}$/'],
        'call.email' => 'required|email|max:255',
        'call.day' => 'required|int|between:0,2',
        'call.time' => 'required|int|between:0,2',
    ];

    /**
     * Errors message
     * @var array
     */
    protected $messages = [
        'call.name.required' => 'Nous Avons Besoin de Votre Nom et Prénom.',
        'call.name.regex' => "Merci D'indiquer Votre Vrai Nom et Prénom.",
        'call.name.min' => "Merci D'indiquer Votre Vrai Nom et Prénom.",
        'call.phone.regex' => "Merci D'indiquer Votre Vrai Numéro de Téléphone.",
        'call.phone.string' => "Merci D'indiquer Votre Vrai Numéro de Téléphone.",
        'call.phone.required' => "Nous Avons Besoin de Votre Numéro de Téléphone.",
        'call.email.required' => "Nous Avons Besoin de Votre Adresse E-mail.",
        'call.email.email' => "Merci D'indiquer Votre Vrai Adresse E-mail.",
        'call.day.between' => "Veuillez recharger la page et recommancé",
        'call.day.required' => "Merci D'indiquer Quand En Peux Vous Appeler",
        'call.day.int' => "Merci D'indiquer Quand En Peux Vous Appeler",
        'call.time.between' => "Veuillez recharger la page et recommancé",
        'call.time.required' => "Merci D'indiquer Votre Disponibilité",
        'call.time.int' => "Merci D'indiquer Votre Disponibilité"
    ];

    public $values = [
        'day' => [
            "Demain", "Cette Semaine", "La semaine Prochaine"
        ],
        'time' => [
            "Matin", "Apré Midi", "Soir"
        ],
    ];

    public function render()
    {
        return view('livewire.call.call-me');
    }

    public function mount()
    {
        $this->call = new Call();
    }

    public function save()
    {
        $this->validate();
        // Change Value for day and time
        $this->replaceValues();
        // save
        $this->call->save();
        // notify for call
        $this->call->notify(new CallNotification());
        // add this contact to contact Table
        $this->switchContact();
        // redirect to home with message
        session()->flash('success', 'Un agent va vous Appellez soyer au rendez-vous');
        redirect()->route('welcome');
    }

    private function replaceValues()
    {
        $this->changeValue('time');
        $this->changeValue('day');
        $this->call->identity_id = $this->getIdentity()->id;
    }

    private function changeValue($index)
    {
        foreach ($this->values[$index] as $key => $item) {
            if ($key == $this->call->$index) {
                $this->call->$index = $item;
            }
        }
    }

    private function switchContact()
    {
        $phone = Contact::where('phone', $this->call->phone)->first();
        if (!$phone) {
            Contact::create([
                'name'  => $this->call->name,
                'email' => $this->call->email,
                'phone' => $this->call->phone,
                'identity_id' => $this->getIdentity()->id
            ]);
        }
    }

}
