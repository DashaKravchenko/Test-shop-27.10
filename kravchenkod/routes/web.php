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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'MainController@index');
Route::get('/category/{slug}', 'MainController@category');
Route::get('/product/{slug}', 'MainController@product');


Route::get('//cart', 'CartController@cart');
Route::post('/cart/add', 'CartController@add');
Route::post('/cart/clear', 'CartController@clear');
Route::post('/cart/remove', 'CartController@remove');


Route::get('/shipping', 'CartController@shipping');
Route::get('/end-shipping', 'CartController@endCheckout');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
