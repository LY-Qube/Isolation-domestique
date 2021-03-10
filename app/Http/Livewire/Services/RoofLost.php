<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class RoofLost extends Component
{
    public $title = "Isolation des combles perdus";

    public $images = "app/images/full/14.webp";

    public function render()
    {
        return view('livewire.services.roof-lost');
    }
}
