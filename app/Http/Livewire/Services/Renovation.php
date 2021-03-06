<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class Renovation extends Component
{
    public $title = "Rénovation thermique globale";

    public $images = "isolation/images/gallery/renovation_thermique.jpg";

    public function render()
    {
        return view('livewire.services.renovation');
    }
}
