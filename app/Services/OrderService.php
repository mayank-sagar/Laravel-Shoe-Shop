<?php

namespace App\Services;
use App\Models\Order;
use App\Models\OrderItem;

class OrderService {

    public function createOrder($order,$orderItems) {
        $order = Order::create($order);
        $orderItems = collect($orderItems);
        $orderItems->each(function ($orderItem) use($order) {
            $orderItem['order_id'] = $order->id;
            OrderItem::create($orderItem);
        });
        return $order; 
    }

    public function getLatestOrderId() {
        $order = Order::latest()->first();
        return $order ? $order->id: 1;
    }
}
?>