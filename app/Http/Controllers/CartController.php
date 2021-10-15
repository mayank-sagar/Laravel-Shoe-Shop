<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CartService;
class CartController extends Controller
{
    private $cartService = null;
    public function __constructor(CartService $cartService) {
        $this->cartService = $cartService;
    }

    function addProduct(Request $request) {
        $request->validate([
            'token' => 'required',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer'
        ]);
        $inputs = $request->only(['token','product_id','quantity']);
        $cartDetails = $this->cartService->addProduct($inputs);
        return response()->json(['token' => $cartDetails[0]->token, ],200);
    }
}
