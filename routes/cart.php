<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::group(['prefix' => 'cart', 'as'=>'cart.'],function() {
    Route::get('/',[CartController::class, 'getCartItems'])->name('list');
    Route::post('/add',[CartController::class, 'addProduct'])->name('add');
    Route::post('/count',[CartController::class, 'getCartCount'])->name('count');
    Route::post('/store',[CartController::class, 'addProduct'])->name('store');
    Route::post('/delete/item',[CartController::class,'deleteCartItem'])->name('item.delete');
    Route::put('update/quantity/item',[CartController::class,'updateItemQuantity'])->name('item.update.quantity');
});
?>