<?php

namespace App\View\Components;

use App\Services\CategoryService;
use Illuminate\View\Component;

class HomeRegularShoes extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-regular-shoes');
    }

    public function getShoes() {
        return $this->categoryService->getLatestCategoryShoes(config('global.category_shoes'),9);
    }

}
