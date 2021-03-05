<?php

namespace App\Http\Livewire\Form;

use App\Http\Traits\IdentityTrait;
use Livewire\Component;

class Persons extends Component
{
    use IdentityTrait;
    public $persons;

    public $submit;

    public $values = [
        '1', '2', '3', '4', '5', 'Plus'
    ];

    public function render()
    {
        return view('livewire.form.persons');
    }


    public function changeValue(string  $value) {
        if ($this->filterValue($value)) {
            $this->persons = $value;
            $this->submit = true;
        }
        else{
            $this->submit = false;
        }
    }

    private function filterValue($value)
    {
        foreach ($this->values as $item) {
            if($item === $value) {
                return true;
            }
        }
        return false;
    }

    public function save()
    {
        if ($this->persons) {
            $contact = $this->getContact();
            if ($contact) {
                $contact->persons = $this->persons;
                $contact->save();
                $this->submit = false;
                $this->emit('formChanged');
            }
            else{
                return redirect()->route('welcome');
            }
        }
        return true;
    }


}
