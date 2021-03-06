<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class RoofConvertible extends Component
{
    public $title = "Isolation des combles aménageables, Sous-rampants";

    public $images = "isolation/images/gallery/13.jpg";

    public function render()
    {
        return view('livewire.services.roof-convertible');
    }
}
