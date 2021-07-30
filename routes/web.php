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

// Brands Product
Route::get('/add-brand-product', 'BrandProduct@AddBrand');
Route::get('/all-brand-product', 'BrandProduct@AllBrand');
Route::post('/save-brand-product', 'BrandProduct@save_brand_product');

Route::get('/edit-brand-product/{brand_product_id}', 'BrandProduct@edit_brand_product');
Route::get('/add-brand-product/{brand_product_id}', 'BrandProduct@delete_brand_product');
Route::post('/update-brand-product/{brand_product_id}', 'BrandProduct@update_brand_product');
Route::post('/delete-brand-product/{brand_product_id}', 'BrandProduct@delete_brand_product');

Route::get('/active-brand-product/{brand_product_id}', 'BrandProduct@active_brand_product');
Route::get('/inactive-brand-product/{brand_product_id}', 'BrandProduct@inactive_brand_product');

// Products
Route::get('/add-new-product', 'ProductController@AddProduct');
Route::get('/all-product-list', 'ProductController@AllProduct');
Route::post('/save-product', 'ProductController@save_product');

Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
Route::post('/update-product/{product_id}', 'ProductController@update_product');
Route::post('/delete-product/{product_id}', 'ProductController@delete_product');

// Front End
Route::get('/', 'HomeController@Index' );
Route::get('/product/id=123', 'HomeController@ProductDetail' );
Route::get('/shop', 'HomeController@Shop' );
Route::get('/cart', 'HomeController@Cart' );
Route::get('/checkout', 'HomeController@Checkout' );