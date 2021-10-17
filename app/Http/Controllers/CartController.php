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

    function getCartItems(Request $request) {
        $token = $request->input('token');
        $cartItems = $this->cartService->getCartItems($token);
        $totalItems = $cartItems->sum('quantity');
        $total = $cartItems->reduce(function($carry,$item) {
             $totalprice= $item->product->price * $item->quantity;
             $carry += $totalprice;
             return $carry;
        },0);
        return view('cart')->with([ 'items' => $cartItems,'totalItems' => $totalItems,'total' => $total,'cartToken' => $token ? $token : '']);
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

    function deleteCartItem(Request $request) {
        $request->validate([
            'item_id' => 'required|integer',
        ]);
        $inputs = $request->only(['token','item_id']);
        $deleted = $this->cartService->deleteCartItem($inputs);
        if(!empty($inputs['token'])) {
            return  redirect()->route('cart.list',['token' => $inputs['token']]);    
        } 
        return  redirect()->route('cart.list');
    }


    function updateItemQuantity(Request $request) {
        $request->validate([
            'item_id' => 'required|integer',
            'quantity' => 'required|integer',
        ]);
        $inputs = $request->only(['token','item_id']);
        $updatedItem = $this->cartService->updateItemQuantity($inputs);
        return response()->json(['updatedItem' => $updatedItem ],200);
    }


}
