<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\SitesettingController::class, 'index'])->name('home');
Route::post('/contact', [App\Http\Controllers\SitesettingController::class, 'ContactStore'])->name('contact');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('paypal/express-checkout', [App\Http\Controllers\PaypalController::class, 'expressCheckout'])->name('paypal.express-checkout');
Route::post('paypal/express-checkout', [App\Http\Controllers\PaypalController::class, 'expressCheckout'])->name('paypal.express-checkout');

Route::get('paypal/express-checkout-success', [App\Http\Controllers\PaypalController::class, 'expressCheckoutSuccess'])->name('paypal.express-success');

Route::post('paypal/notify', [App\Http\Controllers\PaypalController::class, 'notify']);






