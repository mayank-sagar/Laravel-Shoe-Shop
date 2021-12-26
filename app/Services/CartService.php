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

    public function getCartItems($token) {
        if($token) {
            $cart = Cart::where('token',$token)->firstOrFail();
            return $cart->items()->with('product')->get();
        }
        return [];
    }

    public function deleteCartItem($inputs) {
        if(!empty($inputs['token'])) {
            $cart = Cart::where('token',$inputs['token'])->firstOrFail();
            return $cart->items()->where('id',$inputs['item_id'])->delete();
        }
        return false;
    }

    public function updateItemQuantity($inputs) {
        if (!empty($inputs['token'])) {
            $cart = Cart::where('token',$inputs['token'])->firstOrFail();
            $item = $cart->items()->findOrFail($inputs['item_id']);
            $item->quantity = $inputs['quantity'];
            $item->save();
            return $item;
        }
        return false;
    }

    public function clearCartItems($token) {
        $cart = Cart::where('token',$token)->first();
        if($cart) {
            $cart->items()->delete(); 
        }
    }
}

?>