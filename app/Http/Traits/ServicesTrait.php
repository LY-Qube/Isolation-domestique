<?php

namespace App\Http\Traits;


trait ServicesTrait
{
    public $services = [];

    public function __construct()
    {
        $this->services = [
            [
                'url'     => "#",
                'title'   => "ISOLATION DES COMBLES PERDUS À 1 €",
                'image'   => "images/gallery/14.jpg"
            ],
            [
                'url'     => "#",
                'title'   => "ISOLATION DES COMBLES AMÉNAGEABLES À 1 €",
                'image'   => "images/gallery/16.jpg"
            ],
            [
                'url'     => "#",
                'title'   => "ISOLATION DES VIDES SANITAIRES À 1 €",
                'image'   => "images/gallery/13.jpg"
            ],
            [
                'url'     => "#",
                'title'   => "ISOLATION DES SOUS-SOLS, CAVES À 1 €",
                'image'   => "images/gallery/15.jpg"
            ],
            [
                'url'     => "#",
                'title'   => "ISOLATION DES MURS INTERIEURS À 1 €",
                'image'   => "images/gallery/17.jpg"
            ],
            [
                'url'     => "#",
                'title'   => "RENOVATION THERMIQUE GLOBALE",
                'image'   => "images/gallery/renovation_thermique.jpg"
            ],
        ];
    }
}