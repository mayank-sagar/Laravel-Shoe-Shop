<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::group(['prefix' => 'orders', 'as'=>'orders.'],function() {
    Route::get('/',function() {
        return view('orders');
    })->name('list');
    Route::post('create',[OrderController::class,'create'])->name('create');
})


?>