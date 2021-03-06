<?php

namespace App\Http\Traits;


trait ServicesTrait
{
    public $services = [];

    public function __construct()
    {
        $this->services = [
            [
                'url'     => "services.combles-perdus",
                'title'   => "ISOLATION DES COMBLES PERDUS À 1 €",
                'image'   => "isolation/images/gallery/14.jpg"
            ],
            [
                'url'     => "services.combles-amenageables",
                'title'   => "ISOLATION DES COMBLES AMÉNAGEABLES À 1 €",
                'image'   => "isolation/images/gallery/16.jpg"
            ],
            [
                'url'     => "services.vide-sanitaire",
                'title'   => "ISOLATION DES VIDES SANITAIRES À 1 €",
                'image'   => "isolation/images/gallery/13.jpg"
            ],
            [
                'url'     => "services.garage",
                'title'   => "ISOLATION DES SOUS-SOLS, CAVES À 1 €",
                'image'   => "isolation/images/gallery/15.jpg"
            ],
            [
                'url'     => "services.murs",
                'title'   => "ISOLATION DES MURS INTERIEURS À 1 €",
                'image'   => "isolation/images/gallery/17.jpg"
            ],
            [
                'url'     => "services.renovation",
                'title'   => "RENOVATION THERMIQUE GLOBALE",
                'image'   => "isolation/images/gallery/renovation_thermique.jpg"
            ],
        ];
    }
}