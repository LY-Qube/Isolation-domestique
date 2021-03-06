<?php

namespace App\Http\Livewire\Services;

use App\Http\Traits\ServicesTrait;
use Livewire\Component;

class Services extends Component
{
    use ServicesTrait;

    public function render()
    {
        return view('livewire.services.services');
    }
}
