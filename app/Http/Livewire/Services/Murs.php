<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class Murs extends Component
{
    public $image = "isolation/images/services/mur.jpg";

    public $title = "Isolation Des Murs Attenants";

    public $text = "text";

    public function render()
    {
        return view('livewire.services.murs');
    }
}
