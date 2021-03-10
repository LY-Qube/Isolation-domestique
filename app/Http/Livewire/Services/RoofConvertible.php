<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class RoofConvertible extends Component
{
    public $title = "Isolation des combles aménageables, Sous-rampants";

    public $images = "app/images/full/13.webp";

    public function render()
    {
        return view('livewire.services.roof-convertible');
    }
}
