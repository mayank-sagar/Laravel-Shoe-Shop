<?php
namespace App\Services;
use App\Models\Product;
class ProductService {

    function getNewProducts($isPaginate=true) {
        $productQuery = Product::where('status',config('global.product_new'));
        if($isPaginate) {
            return $productQuery->paginate(10);
        }
        return $productQuery->get();
    }

    function getProductDetails($slug) {
        $product = Product::with('gallery')->where(function($query)  {
            $query->where('status',config('global.product_active'));
            $query->orWhere('status',config('global.product_new'));
        })->where('slug',$slug)->firstOrFail();
        $product->gallery = $product->gallery->map(function($galleryImage) {
            $galleryImage->gallery_image = '/storage/'.$galleryImage->gallery_image;
            return $galleryImage;
        });  
        $product->image = '/storage/'.$product->image; 
        return $product;
    }

    function search($search) {
        return Product::where('product_name','like','%'.$search.'%')->get();
    }


}