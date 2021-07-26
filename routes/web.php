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

// Orders
Route::get('/orders', 'AdminController@Orders');
Route::get('/orders/order-detail', 'AdminController@ViewOrders');

// Products
Route::get('/all-product-list', 'ProductController@AllProduct');
Route::get('/add-new-product', 'ProductController@AddProduct');

// Category Product
Route::get('/add-category-product', 'CategoryProduct@AddCategory');
Route::get('/all-category-product', 'CategoryProduct@AllCategory');


Route::get('/', 'HomeController@Index' );
Route::get('/product/id=123', 'HomeController@ProductDetail' );
Route::get('/shop', 'HomeController@Shop' );
Route::get('/cart', 'HomeController@Cart' );