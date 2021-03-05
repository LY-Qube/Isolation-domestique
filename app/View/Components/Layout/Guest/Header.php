<?php

namespace App\View\Components\Layout\Guest;

use App\Http\Traits\ServicesTrait;
use Illuminate\View\Component;

class Header extends Component
{
    use ServicesTrait;

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.layout.guest.header');
    }
}
