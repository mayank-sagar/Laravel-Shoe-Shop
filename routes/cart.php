<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::group(['prefix' => 'cart', 'as'=>'cart.'],function() {
    Route::get('/',function() {
        return view('cart');
    })->name('list');
    Route::post('/add',[CartController::class, 'addProduct'])->name('add');
})

?>