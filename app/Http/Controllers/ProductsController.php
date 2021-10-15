<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductsController extends Controller
{

    private $productService;
    public function __construct(ProductService $productService) {
        $this->productService = $productService;
    }


    function getNewProducts() {
        $newProducts = $this->productService->getNewProducts();
        return view('collection')->with([
            'products' => $newProducts
        ]);
    }
    
    function getProductDetail($slug) {
        $product = $this->productService->getProductDetails($slug);
        return view('product-detail',[
            'product' => $product
        ]);
    }
    
}
