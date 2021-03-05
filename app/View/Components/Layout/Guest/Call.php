<?php

namespace App\View\Components\Layout\Guest;

use App\Http\Traits\IdentityTrait;
use Illuminate\View\Component;

class Call extends Component
{

    use IdentityTrait;

    public $btnCall = true;

    public function __construct()
    {
        $this->btnCall = $this->btnCall();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.layout.guest.call');
    }



    private function btnCall()
    {
        $identity = $this->getIdentity();
        if ($identity) {
            if ($identity->call) {
                return true;
            }
        }

        return false;
    }
}
