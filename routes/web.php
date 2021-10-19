<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home.index');

Route::get('/contact', function () {
    return view('index');
})->name('home.contact');


Route::get('/shipping-address', [AddressController::class,'getShippingAddress'])->name('shipping-address');
Route::post('/shipping-address', [AddressController::class,'createShippingAddress'])->name('shipping-address.create');
Route::get('/checkout', function() {
    return view('checkout');
})->name('checkout');
