<?php

namespace App\View\Components\Layout\Logged;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $messages = [];

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.layout.logged.navbar');
    }
}
