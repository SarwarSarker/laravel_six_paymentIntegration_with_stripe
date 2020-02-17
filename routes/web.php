<?php

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
Route::get('/stripe', function () {
    return view('stripe');
});
Route::get('/paypal', function () {
    return view('paypal');
});

// Route for stripe payment form.
Route::get('stripe', 'StripeController@index');
Route::post('store', 'StripeController@store'); 