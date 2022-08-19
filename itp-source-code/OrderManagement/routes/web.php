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

Route::post('/customer/store', 'App\Http\Controllers\CustomerController@store');

Route::post('/customer/index', 'App\Http\Controllers\CustomerController@index');

Route::get('/customer/home', function () {
    return view('customer.customerHome');
});

Route::get('/customer/profile', 'App\Http\Controllers\CustomerController@profileView');

Route::post('/customerProfile/store', 'App\Http\Controllers\CustomerProfileController@store');

Route::post('/customer/profileUpdate', 'App\Http\Controllers\CustomerProfileController@updateInfo');

Route::post('/customer/profileUpdatedView', 'App\Http\Controllers\CustomerProfileController@updatedInfo');

Route::get('category/vegetables', function () {
    return view('category.vegetables');
});

Route::get('/category/vegetables/broccoli', function () {
    return view('category.broccoli');
});
