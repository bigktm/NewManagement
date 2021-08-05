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
Route::get('/admin', 'AdminController@adminLogin');
Route::post('/login-post', 'AdminController@loginPost');

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
Route::get('/delete-category-product/{category_product_id}', 'CategoryProduct@delete_category_product');

Route::get('/active-category-product/{category_product_id}', 'CategoryProduct@active_category_product');
Route::get('/inactive-category-product/{category_product_id}', 'CategoryProduct@inactive_category_product');

// Brands Product
Route::get('/add-brand-product', 'BrandProduct@AddBrand');
Route::get('/all-brand-product', 'BrandProduct@AllBrand');
Route::post('/save-brand-product', 'BrandProduct@save_brand_product');

Route::get('/edit-brand-product/{brand_product_id}', 'BrandProduct@edit_brand_product');
Route::get('/add-brand-product/{brand_product_id}', 'BrandProduct@delete_brand_product');
Route::post('/update-brand-product/{brand_product_id}', 'BrandProduct@update_brand_product');
Route::get('/delete-brand-product/{brand_product_id}', 'BrandProduct@delete_brand_product');

Route::get('/active-brand-product/{brand_product_id}', 'BrandProduct@active_brand_product');
Route::get('/inactive-brand-product/{brand_product_id}', 'BrandProduct@inactive_brand_product');

// Products
Route::get('/add-new-product', 'ProductController@AddProduct');
Route::get('/all-product-list', 'ProductController@AllProduct');
Route::post('/save-product', 'ProductController@save_product');

Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
Route::post('/update-product/{product_id}', 'ProductController@update_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');

Route::get('/san-pham/{product_slug}', 'ProductController@detail_product');




// Slider
Route::get('/add-slider', 'SliderController@add_slider');
Route::get('/all-slider', 'SliderController@all_slider');
Route::post('/save-slider', 'SliderController@save_slider');

Route::get('/edit-slider/{slider_id}', 'SliderController@edit_slider');
Route::post('/update-slider/{slider_id}', 'SliderController@update_slider');
Route::get('/delete-slider/{slider_id}', 'SliderController@delete_slider');

// Gallery
Route::get('/add-gallery/{product_id}', 'GalleryProduct@add_gallery');
Route::post('/insert-gallery/{product_id}', 'GalleryProduct@insert_gallery');
Route::get('/delete-gallery/{gallery_id}','GalleryProduct@delete_gallery');



// Front End
Route::get('/', 'HomeController@Index' );
Route::get('/product/id=123', 'HomeController@ProductDetail' );


Route::get('/danh-muc/{category_slug}', 'CategoryProduct@show_category_home' );
Route::get('/thuong-hieu/{brand_slug}', 'CategoryProduct@show_brand_home' );



Route::get('/cart', 'HomeController@Cart' );
Route::get('/checkout', 'HomeController@Checkout' );