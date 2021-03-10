<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class Garage extends Component
{

    public $title = "Sous-sols et planchers bas";
    public $title2 = "Garage";

    public $images = "app/images/full/15.webp";

    public function render()
    {
        return view('livewire.services.garage');
    }
}
