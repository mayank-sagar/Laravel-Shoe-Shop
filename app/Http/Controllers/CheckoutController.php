<?php

namespace App\Http\Controllers;
use Razorpay\Api\Api;
use Illuminate\Http\Request;
use App\Models\Cart;

class CheckoutController extends Controller
{
    public function checkout(Request $request) {
        $cartToken = $request->session()->get('cart_token');
        $cart = Cart::where('token',$cartToken)->firstOrFail();
        $total = $cart->items->reduce(function($sum,$cartItem) {
            $sum += $cartItem->product->price * $cartItem->quantity;
            return $sum;
        },0);

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $orderData = [
            'amount'          => $total * 100, 
            'currency'        => 'USD'
        ];
        $razorpayOrder = $api->order->create($orderData);
        return view('checkout')
        ->with(
            ['total' => $total * 100,
                   'showTotal' => $total,
                   'orderId' => $razorpayOrder->id,
                   'key' => env('RAZOR_KEY'),
                   'cartToken' =>  $cartToken]);
    }

}
