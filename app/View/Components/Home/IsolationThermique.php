<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class IsolationThermique extends Component
{

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.home.isolation-thermique');
    }
}
