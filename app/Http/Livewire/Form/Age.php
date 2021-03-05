<?php

namespace App\Http\Livewire\Form;

use App\Http\Traits\IdentityTrait;
use Livewire\Component;

class Age extends Component
{
    use IdentityTrait;

    public $age;

    public $submit;

    public $values = [
        "- 9 Ans", "+ 10 Ans", "+ 20 Ans", "+ 40 Ans"
    ];

    public function render()
    {
        return view('livewire.form.age');
    }

    public function changeValue(string $value)
    {
        if ($this->filterValue($value)) {
            $this->age = $value;
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
        if ($this->age) {
            $contact = $this->getContact();
            if ($contact) {
                $contact->age = $this->age;
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
