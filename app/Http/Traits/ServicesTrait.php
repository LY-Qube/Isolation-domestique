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
                'image'   => "app/images/min/14.webp"
            ],
            [
                'url'     => "services.combles-amenageables",
                'title'   => "ISOLATION DES COMBLES AMÉNAGEABLES À 1 €",
                'image'   => "app/images/min/16.webp"
            ],
            [
                'url'     => "services.vide-sanitaire",
                'title'   => "ISOLATION DES VIDES SANITAIRES À 1 €",
                'image'   => "app/images/min/13.webp"
            ],
            [
                'url'     => "services.garage",
                'title'   => "ISOLATION DES SOUS-SOLS, CAVES À 1 €",
                'image'   => "app/images/min/15.webp"
            ],
            [
                'url'     => "services.murs",
                'title'   => "ISOLATION DES MURS INTERIEURS À 1 €",
                'image'   => "app/images/min/17.webp"
            ],
            [
                'url'     => "services.renovation",
                'title'   => "RENOVATION THERMIQUE GLOBALE",
                'image'   => "app/images/min/renovation_thermique.webp"
            ],
        ];
    }
}