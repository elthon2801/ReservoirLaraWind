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

Route::get('/', function () {
    return view('welcome');
});

/*-------------------------START OF SELLER ROUTES----------------------------------*/

Route::get('/seller/chat', function () {
    return view('seller/chat');
});
Route::get('/seller/dashboard', function () {
    return view('seller/dashboard');
});
Route::get('/seller/finance', function () {
    return view('seller/wallet');
});
Route::get('/seller/pointofsale', function () {
    return view('seller/pointOfSale');
});
Route::get('/seller/productdetails', function () {
    return view('seller/productDetails');
});
Route::get('/seller/productlist', function () {
    return view('seller/productList');
});
Route::get('/seller/pullorders', function () {
    return view('seller/pullOrders');
});
Route::get('/seller/pushschedule', function () {
    return view('seller/pushSchedule');
});
Route::get('/seller/storeprofile', function () {
    return view('seller/storeProfile');
});
Route::get('/seller/subscription', function () {
    return view('seller/subscription');
});

/*-------------------------END OF SELLER ROUTES----------------------------------*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
