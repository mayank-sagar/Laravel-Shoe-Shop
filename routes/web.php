<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\SearchController;

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

Route::get('/contact',[ContactController::class,'show'])->name('home.contact');
Route::post('/contact',[ContactController::class,'create'])->name('home.contact');


Route::get('/shipping-address', [AddressController::class,'getShippingAddress'])->name('shipping-address');
Route::post('/shipping-address', [AddressController::class,'createShippingAddress'])->name('shipping-address.create');
Route::get('/checkout', [CheckoutController::class,'checkout'])->name('checkout');
Route::post('/subscription', [SubscriptionController::class,'create'])->name('subscription');
Route::post('/search', [SearchController::class,'search'])->name('search');
