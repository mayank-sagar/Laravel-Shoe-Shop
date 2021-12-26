<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use App\Services\CartService;
use Carbon\Carbon;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class OrderController extends Controller
{

    public $cartService;
    public $orderService;
    
    public function __construct(OrderService $orderService, CartService $cartService) {
        $this->cartService = $cartService;
        $this->orderService = $orderService;
    }

    public function create(Request $request) {
          try {
            $inputs = $request->only(['meta','amount','cart_token','gateway']);
            $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));
            $attributes  = array('razorpay_signature'  => $inputs['meta']['razorpay_signature'], 
                                 'razorpay_payment_id'  => $inputs['meta']['razorpay_payment_id'] ,  
                                 'razorpay_order_id' => $inputs['meta']['razorpay_order_id']);
            $order  = $api->utility->verifyPaymentSignature($attributes);
            $date = Carbon::now()->format('D, d M Y H:i:s');
            $orderId = $this->orderService->getLatestOrderId();
            $cartItems = $this->cartService->getCartItems($inputs['cart_token']);
            $orderItems = $cartItems->map(function($cartItem) {
                return [
                    'product_id' =>$cartItem->product->id,
                    'product_name' => $cartItem->product->product_name,
                    'category' => $cartItem->product->category->name,
                    'price' =>  $cartItem->product->price,
                    'image' => $cartItem->product->image,
                ];
            });
            $this->orderService->createOrder([
                'order_id' => $date.' '.$orderId,
                'invoice' => 'dummy invoice',
                'total_price' => $inputs['amount'],
                'user_id' => null,
                'status' => 1,
                'gateway' => $inputs['gateway'],
                'gateway_meta' => json_encode($inputs['meta'])
    
            ],$orderItems);
            $this->cartService->clearCartItems($inputs['cart_token']);
    
         } catch(SignatureVerificationError $e) {
            abort(401, $e->getMessage());
         } catch(Exception $e) {
            abort(401, 'Something went wrong');
         }
        return view('order-success');
    } 
}
