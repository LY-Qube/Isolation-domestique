<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class Services extends Component
{
    // title - url - image
    public $services = [
        [
            'url'     => "#",
            'title'   => "ISOLATION DES COMBLES PERDUS À 1 €",
            'image'   => "isolation/images/gallery/14.jpg"
        ],
        [
            'url'     => "#",
            'title'   => "ISOLATION DES COMBLES AMÉNAGEABLES À 1 €",
            'image'   => "isolation/images/gallery/16.jpg"
        ],
        [
            'url'     => "#",
            'title'   => "ISOLATION DES VIDES SANITAIRES À 1 €",
            'image'   => "isolation/images/gallery/13.jpg"
        ],
        [
            'url'     => "#",
            'title'   => "ISOLATION DES SOUS-SOLS, CAVES À 1 €",
            'image'   => "isolation/images/gallery/15.jpg"
        ],
        [
            'url'     => "#",
            'title'   => "ISOLATION DES MURS INTERIEURS À 1 €",
            'image'   => "isolation/images/gallery/17.jpg"
        ],
        [
            'url'     => "#",
            'title'   => "RENOVATION THERMIQUE GLOBALE",
            'image'   => "isolation/images/gallery/renovation_thermique.jpg"
        ],
    ];
    public function render()
    {
        return view('livewire.services.services');
    }
}
