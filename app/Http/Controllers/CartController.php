<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;
use App\Services\CartService;
class CartController extends Controller
{
    private $cartService = null;
    public function __construct(CartService $cartService) {
        $this->cartService = $cartService;
    }

    function addProduct(Request $request) {
        $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer'
        ]);
        $inputs = $request->only(['token','product_id','quantity']);
        $cartDetails = $this->cartService->addProduct($inputs);
        return response()->json(['token' => $cartDetails[0]->token ],200);
    }

    function getCartCount(Request $request) {
        $token = $request->input('token');
        $cartItemsCount = 0;
        if($token) {
            $cart = Cart::where('token',$token)->firstOrFail();
            $cartItemsCount = $cart->items()->sum('quantity');
        }
        return response()->json(['count' => $cartItemsCount],200);
    }
}
