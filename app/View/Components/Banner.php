<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\URL;
use App\Services\BannerService;
class Banner extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $showRoute;
    private $bannerService;
    public $banners;
    public function __construct(BannerService $bannerService , $showRoute)
    {
        $this->showRoute = $showRoute;
        $this->bannerService = $bannerService;
        $this->banners = $this->bannerService->bannerProducts();
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
