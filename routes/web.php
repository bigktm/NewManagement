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
Route::get('/admin/register', 'AdminController@adminRegister');
Route::get('/logout-admin', 'AdminController@logout_admin');

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

Route::get('/san-pham/', 'CategoryProduct@show_all_product' );
Route::get('/danh-muc/{category_slug}', 'CategoryProduct@show_category_home' );
Route::get('/thuong-hieu/{brand_slug}', 'CategoryProduct@show_brand_home' );

// Customer
Route::get('/customer/login', 'CustomerController@customer_index' );
Route::post('/customer/register-form', 'CustomerController@register_form' );
Route::post('/customer/login-form', 'CustomerController@login_form' );
Route::get('/customer/logout', 'CustomerController@logout_customer' );


// Cart
// Cart with vendor Gloudemans Shopping Cart
Route::post('/save-shoping-cart', 'CartController@save_shopping_cart' );
Route::post('/update-shoping-cart', 'CartController@update_shopping_cart' );
Route::get('/view-cart', 'CartController@show_cart' );
Route::get('/delete-to-cart/{rowId}', 'CartController@delete_to_cart' );

// Cart with Ajax
Route::post('/add-to-cart/{product_id}', 'CartController@addToCartAjax' );
Route::post('/save-cart', 'CartController@save_cart' );
Route::post('/update-cart', 'CartController@update_cart' );
Route::get('/remove-cart-item/{session_id}', 'CartController@remove_cartItem' );
Route::get('/your-cart', 'CartController@showCart' );
Route::get('/count-cart', 'CartController@count_cart' );
Route::get('/mini-cart', 'CartController@mini_cart' );

// Checkout

Route::get('/checkout', 'CheckoutController@checkout' );
Route::post('/save-order-form', 'CheckoutController@save_order_form' );
Route::get('/place-order', 'CheckoutController@place_order' );