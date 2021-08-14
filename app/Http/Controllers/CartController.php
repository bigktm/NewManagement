<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use App\ProductModel;
use App\Gallery;
use App\Brands;
use App\CategoryProductModel;
use Illuminate\Support\Str;
use App\Exports\ExcelExports;
use App\Imports\ExcelImports;
use Session;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect; 
session_start();

class CartController extends Controller
{

    // Cart with vendor Gloudemans Shopping Cart
    //  add to cart
    public function save_shopping_cart(Request $request) {
    	$product_id = $request->id_product;
    	$quantity = $request->quantity;
    	$product_info = ProductModel::where('product_id', $product_id)->first();

    	$data['id'] = $product_info->product_id;
    	$data['qty'] = $quantity;
    	$data['name'] = $product_info->product_name;
    	$data['price'] = $product_info->product_price;
    	$data['options']['image'] = $product_info->product_image;
    	$data['options']['slug'] = $product_info->product_slug;
    	$data['options']['price_sale'] = $product_info->product_price_sale;

    	Cart::add($data);
    	Session::put('message','Đã thêm sản phẩm vào giỏ hàng');
    	return redirect()->back();
    }

    //  update 
    public function update_shopping_cart(Request $request) {
        $rowId = $request->cart_rowId;
        $qty = $request->quantity_update;

        Cart::update($rowId, $qty);
        return redirect()->back();
    }
    // delete cart item
    public function delete_to_cart($rowId) {
        Cart::remove($rowId);
        return redirect()->back();
    }

    // show your cart   
    public function show_cart() {
        return view('site.cart.view_cart');
    }

    // ------------------------------------------------------------------------------------ //

    // Cart with Ajax
    // add to cart with form
    public function save_cart(Request $request) {
        $product_id = $request->id_product;
        $quantity = $request->quantity;

        $products = ProductModel::where('product_id', $product_id)->first();
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart');
        if( isset($cart[$product_id]) ) {
            $cart[$product_id]['qty'] = $cart[$product_id]['qty'] + $quantity;
        } else 
        {
            $cart[$product_id] = 
            [
                'session_id' => $session_id,
                'product_id' => $product_id,
                'product_name' => $products->product_name,
                'product_image' => $products->product_image,
                'qty' => $quantity,
                'product_price' => $products->product_price,
                'product_slug' => $products->product_slug,
                'product_price_sale' => $products->product_price_sale
            ];
        }
        Session::put('cart', $cart);
        Session::put('message','Đã thêm sản phẩm vào giỏ hàng');
        return redirect()->back();
    }

    // add to cart with ajax
    public function addToCartAjax($product_id){
        // Session::flush('cart');
        $products = ProductModel::find($product_id);
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart');
        if( isset($cart[$product_id]) ) {
            $cart[$product_id]['qty'] = $cart[$product_id]['qty'] + 1;
        } else 
        {
            $cart[$product_id] = 
            [
                'session_id' => $session_id,
                'product_id' => $products->product_id,
                'product_name' => $products->product_name,
                'product_image' => $products->product_image,
                'qty' => 1,
                'product_price' => $products->product_price,
                'product_slug' => $products->product_slug,
                'product_price_sale' => $products->product_price_sale
            ];
        }
        Session::put('cart', $cart);
        return response()->json([
            'code' => '200',
            'message' => 'Success'
        ], 200);
    } 

    // delete cart with ajax

    public function remove_cartItem($session_id) {
        $cart = Session::get('cart');

        if(Session::has('cart')) {
            foreach($cart as $key => $cartItem) {
                if($cartItem['session_id'] == $session_id) {
                    unset($cart[$key]);
                }
            }
            Session::put('cart', $cart);
            return redirect()->back();
        } else {
            return redirect()->back();
        }
        
    }

    // update cart

    public function update_cart(Request $request) {
        $data = $request->all();
        $cart = Session::get('cart');
        if($cart==true) {
            foreach($data['quantity_update'] as $key => $qty) {
                foreach($cart as $session => $val) {
                    if($val['session_id'] == $key) {
                        $cart[$session]['qty'] = $qty;
                    }
                }
            }
            Session::put('cart', $cart);
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    // your cart
    public function showCart() {
        $cart = Session::get('cart');
        return view('site.cart.cart', compact('cart'));
    }

    public function count_cart() {
        $cart = count(Session::get('cart'));
        $output = '';
        if(count(Session::get('cart')) == 0) {
            $output = 0;
        } else {
            $output.= $cart;
        }
        echo $output;
    }
    public function mini_cart() { 
        $cart = count(Session::get('cart'));

        $output = '';
                                                    
        $total = 0;

        if(count(Session::get('cart')) == 0) {
           $output.='<div class="mini-cart-empty">';
           $output.='<i class="fal fa-shopping-cart title120 empty-icon"></i>';
           $output.='<h5 class="desc text-uppercase font-semibold">Giỏ hàng đang trống</h5>';
           $output.='<p class="title14 return-to-shop woocommerce">';
           $output.='<a class="button wc-backward" href="#">Tiếp tục mua sắm</a>';
           $output.='</p></div>';                                            
        } else {
            $output.='<div class="mini-cart-has-product"><div class="product-mini-cart list-mini-cart-item">';
            foreach(Session::get('cart') as $key => $cartItem){

                if($cartItem['product_price_sale'] > 0) {
                    $price = $cartItem['product_price_sale'];
                    $subtotal = $cartItem['qty'] * $price;
                } 
                else {
                    $price = $cartItem['product_price'];
                    $subtotal = $cartItem['qty'] * $price;
                }

                $total += $subtotal;


                $output.='<div class="item-info-cart product-mini-cart table-custom mini_cart_item">';
                $output.='<div class="product-thumb">';
                $output.='<a href="'.url('/san-pham/'. $cartItem['product_slug']).'">';
                $output.='<img width="50" height="100" src="'.asset('public/uploads/products/'. $cartItem['product_image']).'" alt="'.$cartItem['product_name'].'"></a></div>';
                $output.='<div class="product-info">';
                $output.='<h3 class="title14 product-title">';
                $output.='<a href="'.url('/san-pham/'.$cartItem['product_slug']).'">'.$cartItem['product_name'].'</a></h3>';
                $output.='<div class="mini-cart-qty">';
                $output.='<span class="qty-num">'.$cartItem['qty'].'</span> x <span class="flex-wrap">';
                $output.='<span class="price-product">'.number_format($price).' ₫</span></span></div></div>';
                $output.='<div class="product-delete text-right">';
                $output.='<a href="'.url('/remove-cart-item/'. $cartItem['session_id']).'" class="remove-product"><i class="fad fa-trash"></i></a></div></div>';
            }  
            $output.='</div>';
            $output.='<div class="mini-cart-total text-uppercase title18 clearfix">';
            $output.='<span class="pull-left">Tông tiền</span>';
            $output.='<strong class="pull-right color mini-cart-total-price get-cart-price">'.number_format($total).' đ</strong></div>';
            $output.='<div class="mini-cart-button">';
            $output.='<a href="'.url('/your-cart').'" class="button wc-forward">Xem giỏ hàng</a>';
            $output.='<a href="'.url('/checkout').'" class="button checkout wc-forward">Thanh Toán</a>';
            $output.='</div></div>';
        }

        echo $output;
    }
}
