<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class CrawlSpace extends Component
{
    public $title = "Isolation des vides sanitaires";

    public $images = "isolation/images/gallery/16.jpg";

    public function render()
    {
        return view('livewire.services.crawl-space');
    }
}
