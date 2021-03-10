<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class Renovation extends Component
{
    public $title = "Rénovation thermique globale";

    public $images = "app/images/full/renovation_thermique.webp";

    public function render()
    {
        return view('livewire.services.renovation');
    }
}
