<?php
namespace App\Services;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Str;
class CartService {

    function addProduct($inputs) {
        $cart = $this->createOrFindCart($inputs['token']);
        $createdItem = CartItem::create([
            'product_id' => $inputs['product_id'],
            'quantity' => $inputs['quantity'],
            'cart_id' => $cart->id
        ]);
        return [$cart,$createdItem];
    }


    private function createOrFindCart($token) {
        if($token) {
            return Cart::where([
                'token' => $token
            ])->firstOrFail();
        }
        return Cart::create([
            'token' => Str::random(16)
        ]);
    }
}

?>