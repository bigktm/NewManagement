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

Auth::routes();

Route::get('/dashboard', 'AdminController@Index');
Route::get('/orders', 'AdminController@Orders');
Route::get('/orders/order-detail', 'AdminController@ViewOrders');
Route::get('/product-list', 'AdminController@ProductList');
Route::get('/product/add', 'AdminController@AddProduct');


Route::get('/', 'HomeController@Index' );
Route::get('/product/id=123', 'HomeController@ProductDetail' );
Route::get('/shop', 'HomeController@Shop' );
Route::get('/cart', 'HomeController@Cart' );