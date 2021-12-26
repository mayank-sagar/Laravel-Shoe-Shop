<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
class SearchController extends Controller
{
    public function __construct(ProductService $productService)
    {
        $this->productService  = $productService;
    }

    public function search(Request $request) {
        $search = $request->input('search');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        $products = $this->productService->search($search);
        return response()->json([
            'products' => $products
        ],200);
    }
}
