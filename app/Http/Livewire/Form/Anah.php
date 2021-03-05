<?php

namespace App\Http\Livewire\Form;

use App\Http\Traits\IdentityTrait;
use Livewire\Component;

class Anah extends Component
{
    use IdentityTrait;

    public $anah;

    public $submit;

    public $values = [
        "Inferieur 2019 par rapport à 2018",
        "Superieur 2019 par rapport à 2018",
        "inferieur 2020 par rapport à 2019",
        "Superieur 2020 par rapport à 2019"
    ];

    public function render()
    {
        return view('livewire.form.anah');
    }

    public function changeValue(string $value)
    {
        if ($this->filterValue($value)) {
            $this->anah = $value;
            $this->submit = true;
        } else {
            $this->submit = false;
        }
    }

    private function filterValue($value)
    {
        foreach ($this->values as $item) {
            if ($item === $value) {
                return true;
            }
        }
        return false;
    }

    public function save()
    {
        if ($this->anah) {
            $contact = $this->getContact();
            if ($contact) {
                $contact->anah = $this->anah;
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
