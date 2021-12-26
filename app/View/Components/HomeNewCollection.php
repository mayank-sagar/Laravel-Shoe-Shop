<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class HomeNewCollection extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getNewProducts() {
        return Product::where('status',2)->limit(2)->orderBy('created_at','desc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-new-collection');
    }
}
