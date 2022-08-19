<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;

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
    return view('home');
});

Route::get('/customer/register', function () {
    return view('customer.register');
});

Route::get('/customer/login', function () {
    return view('customer.login');
});

Route::get('/customer/contactUs', function () {
    return view('customer.contactUs');
});

Route::get('/customer/profileUpdate', function () {
    return view('customer.profileUpdate');
});


Route::post('/customer/store', 'App\Http\Controllers\CustomerController@store');

Route::post('/Contact/store', 'App\Http\Controllers\ContactController@store');

Route::post('/customer/index', 'App\Http\Controllers\CustomerController@index');

Route::get('/customer/home', function () {
    return view('customer.customerHome');
});

Route::get('/customer/profile', 'App\Http\Controllers\CustomerController@profileView');

Route::post('/customerProfile/store', 'App\Http\Controllers\CustomerProfileController@store');

Route::post('/customer/profileUpdate', 'App\Http\Controllers\CustomerProfileController@updateInfo');

Route::post('/customer/profileUpdatedView', 'App\Http\Controllers\CustomerProfileController@updatedInfo');

Route::get('/customerProfile/delete/{id}', 'App\Http\Controllers\CustomerController@deleteProfile');

Route::get('category/vegetables', function () {
    return view('category.vegetables');
});

Route::get('/category/vegetables/broccoli', function () {
    return view('category.broccoli');
});

Route::get('/category/iceCream', function () {
    return view('category.iceCream');
});

Route::get('/category/yoghurtDrink', function () {
    return view('category.yoghurtDrink');
});


Route::get('/products', [ProductController::class, 'index']);  
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

Route::get('/checkout', function () {
    return view('checkout');
});

Route::post('checkout', [SaleController::class, 'addOrder'])->name('checkout.store');
Route::get('checkout/sucess/{id}', [SaleController::class, 'placedOrder'])->name('checkout.sucess');

