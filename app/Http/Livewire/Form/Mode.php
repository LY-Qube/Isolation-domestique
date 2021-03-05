<?php

namespace App\Http\Livewire\Form;

use App\Http\Traits\IdentityTrait;
use Livewire\Component;

class Mode extends Component
{
    use IdentityTrait;

    public $mode;

    public $submit;

    public function render()
    {
        return view('livewire.form.mode');
    }

    public function changeValue(string $value)
    {
        if ($this->filterValue($value)) {
            $this->mode = $value;
            $this->submit = true;
        }
        else{
            $this->submit = false;
        }

    }

    public function save()
    {
        if ($this->mode) {
            $contact = $this->getContact();
            if ($contact) {
                $contact->mode = $this->mode;
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

    private function filterValue(string $value)
    {
        if ($value === 'Electricité' || $value === 'Bois' || $value === 'Fioul' || $value === 'Gaz') {
            return true;
        }

        return false;
    }

}
