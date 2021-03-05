<?php

namespace App\Http\Livewire\Form;

use App\Models\Contact;
use App\Models\Identity;
use Livewire\Component;

class Form extends Component
{

    public $form;

    protected $listeners = ['formChanged' => 'formChanged'];

    public function render()
    {
        $this->getForm();
        return view('livewire.form.form');
    }

    public function formChanged()
    {
        $this->getForm(true);
    }

    /**
     * detect what Form we need to print
     * if is registered
     * if is you ar
     * if we know what department
     * if we know what mode
     * if we know nbr of Persons
     * @param null $reload
     */
    public function getForm($reload = null)
    {

        $identity = Identity::where('identity', request()->cookie('Identity'))->first();
        if ($identity) {
            if ($identity->contact) {
                if ($this->registered($identity->contact)) {
                    if ($this->you_ar($identity->contact)) {
                        if ($this->department($identity->contact)) {
                            if ($this->mode($identity->contact)) {
                                if ($this->persons($identity->contact)) {
                                    if ($this->age($identity->contact)) {
                                        if ($this->anah($identity->contact)) {
                                            $this->form = "finish";
                                        }
                                        else {
                                            $this->form = "anah";
                                        }
                                    }
                                    else {
                                        $this->form = "age";
                                    }
                                }
                                else {
                                    $this->form = "persons";
                                }
                            }
                            else {
                                $this->form = "mode";
                            }
                        }
                        else {
                            if ($reload) {
                                return redirect()->route('welcome');
                            }
                            else{
                                $this->form = "department";
                            }
                        }
                    }
                    else {
                        $this->form = "you_ar";
                    }
                }
                else {
                    $this->form = "register";
                }
            }
            else{
                $this->form = "register";
            }
        }
        else {
            $this->form = "register";
        }
    }

    private function registered(Contact $contact)
    {
        return $contact->email != '' && $contact->phone != '' && $contact->name != '';
    }

    private function you_ar(Contact $contact)
    {
        return $contact->you_ar;
    }

    private function department(Contact $contact)
    {
        return $contact->department;
    }

    private function mode(Contact $contact)
    {
        return $contact->mode;
    }

    private function persons(Contact $contact)
    {
        return $contact->persons;
    }

    private function age(Contact $contact)
    {
        return $contact->age;
    }

    private function anah(Contact $contact)
    {
        return $contact->anah;
    }

}
