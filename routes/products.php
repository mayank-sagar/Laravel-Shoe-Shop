<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/collection',[ProductsController::class,'getNewProducts'])->name('home.collection');;

Route::get('/shoes', [ProductsController::class,'getShoes'])->name('home.shoes');;

Route::get('/shoes/{slug}',[ProductsController::class,'getProductDetail'])->name('home.shoes-detail');
Route::get('/racing-boots',[ProductsController::class,'getRacingShoes'])->name('home.racing-boots');

?>