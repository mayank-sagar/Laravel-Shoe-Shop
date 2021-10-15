<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/collection',[ProductsController::class,'getNewProducts'])->name('home.collection');;

Route::get('/shoes', function () {
    return view('shoes');
})->name('home.shoes');;

Route::get('/shoes/{slug}',[ProductsController::class,'getProductDetail'])->name('home.shoes-detail');

Route::get('/racing-boots', function () {
    return view('racing-boots');
})->name('home.racing-boots');;

?>