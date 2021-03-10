<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class CrawlSpace extends Component
{
    public $title = "Isolation des vides sanitaires";

    public $images = "app/images/full/16.webp";

    public function render()
    {
        return view('livewire.services.crawl-space');
    }
}
