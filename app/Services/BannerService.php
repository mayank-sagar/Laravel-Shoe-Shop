<?php
namespace App\Services;
use App\Models\Banner;

class BannerService {

    public function bannerProducts() {
        return Banner::with('product')->get();
    }

}
?>