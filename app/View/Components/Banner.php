<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\URL;

class Banner extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $showRoute;

    public function __construct($showRoute)
    {
        $this->showRoute = $showRoute;
    }

    public function isShow() {
        return URL::current() === $this->showRoute;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.banner');
    }
}
