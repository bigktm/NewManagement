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
Route::post('/save-category-product', 'CategoryProduct@save_category_product');

Route::get('/edit-category-product/{category_product_id}', 'CategoryProduct@edit_category_product');
Route::get('/add-category-product/{category_product_id}', 'CategoryProduct@delete_category_product');
Route::post('/update-category-product/{category_product_id}', 'CategoryProduct@update_category_product');
Route::post('/delete-category-product/{category_product_id}', 'CategoryProduct@delete_category_product');

Route::get('/active-category-product/{category_product_id}', 'CategoryProduct@active_category_product');
Route::get('/inactive-category-product/{category_product_id}', 'CategoryProduct@inactive_category_product');

Route::get('/', 'HomeController@Index' );
Route::get('/product/id=123', 'HomeController@ProductDetail' );
Route::get('/shop', 'HomeController@Shop' );
Route::get('/cart', 'HomeController@Cart' );
Route::get('/checkout', 'HomeController@Checkout' );