<?php

namespace App\Http\Livewire\Form;

use App\Http\Traits\IdentityTrait;
use Livewire\Component;

class YouAre extends Component
{
    use IdentityTrait;

    public $you;

    public $submit;

    private $values = [
        "Propriétaire", "Locataire", "Usufruiter"
    ];

    public function render()
    {
        return view('livewire.form.you-are');
    }


    public function changeValue(string $value)
    {
        if ($this->filter($value, $this->values)) {
            $this->you = $value;
            $this->submit = true;
        } else {
            $this->submit = false;
        }
    }

    public function save()
    {
        if ($this->you) {
            $contact = $this->getContact();
            if ($contact) {
                $contact->you_ar = $this->you;
                $contact->save();
                $this->submit = false;
                $this->emit('formChanged');
            } else {
                return redirect()->route('welcome');
            }
        }
        return true;
    }
}
