<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class Garage extends Component
{

    public $title = "Sous-sols et planchers bas";
    public $title2 = "Garage";

    public $images = "isolation/images/gallery/15.jpg";

    public function render()
    {
        return view('livewire.services.garage');
    }
}
