<?php

namespace App\Http\Livewire\Ebook;

use Livewire\Component;

class Ebook extends Component
{
    public function render()
    {
        return view('livewire.ebook.ebook')->layout('layouts.simple');
    }
}
