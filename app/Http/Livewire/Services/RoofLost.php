<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class RoofLost extends Component
{
    public $title = "Isolation des combles perdus";

    public $images = "isolation/images/gallery/14.jpg";

    public function render()
    {
        return view('livewire.services.roof-lost');
    }
}
