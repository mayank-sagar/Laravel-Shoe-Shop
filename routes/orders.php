<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'orders', 'as'=>'orders.'],function() {
    Route::get('/',function() {
        return view('orders');
    })->name('list');
})


?>