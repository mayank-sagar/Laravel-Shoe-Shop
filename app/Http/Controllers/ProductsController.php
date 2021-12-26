<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductsController extends Controller
{

    private $productService;
    public function __construct(ProductService $productService, CategoryService $categoryService) {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
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

    function getRacingShoes() {
        $products = $this->categoryService->getCategoryShoes(config('global.category_racing_shoes'));
        return view('racing-boots')->with([
            'products' => $products
        ]);
    }

    function getShoes() {
        $products = $this->categoryService->getCategoryShoes(config('global.category_shoes'));
        return view('shoes')->with([
            'products' => $products
        ]);
    }
    
}
