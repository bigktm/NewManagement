<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\ProductModel;
use App\Order;
use App\OrderDetail;
use App\Shipping;
use Illuminate\Support\Str;
use Session;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect; 
session_start();


class CheckoutController extends Controller
{
    public function checkout() {
        
    	$cart = Session::get('cart');
    	// echo '<pre>';
    	// print_r($cart);
    	// echo '</pre>';
    	return view('site.cart.checkout', compact('cart'));
    }

    public function save_order_form(Request $request)
    {

    	$customer_id = Session::get('customer_id');

    	// insert shipping table
    	$data_shipping = array();

    	$data_shipping['shipping_name'] = $request->shipping_name;
    	$data_shipping['shipping_phone'] = $request->shipping_phone;
    	$data_shipping['shipping_address'] = $request->shipping_address;
    	$data_shipping['shipping_notes'] = $request->shipping_notes;
    	$data_shipping['shipping_method'] = $request->shipping_method;

    	$shipping_id = Shipping::insertGetId($data_shipping);

		// insert order table

    	$data_order = array();
    	$data_order['customer_id'] = $customer_id;
    	$data_order['shipping_id'] = $shipping_id;
    	$data_order['order_status'] = 'Đang chờ xử lý';
    	$data_order['order_code'] = substr(md5(microtime()),rand(0,26),5);
    	$data_order['order_date'] = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');;
    	$data_order['order_destroy'] = '';

    	$order_id = Order::insertGetId($data_order);

    	// insert order detail table

    	$cart_content = Session::get('cart');

    	$data_order_detail = array();

    	foreach($cart_content as $cart_content_items){
    		if($cart_content_items['product_price_sale'] > 0) {
    			$cart_price = $cart_content_items['product_price_sale'];
    		}else {
    			$cart_price = $cart_content_items['product_price'];
    		}
    		$data_order_detail['order_id'] = $order_id;
    		$data_order_detail['product_id'] = $cart_content_items['product_id'];
    		$data_order_detail['product_name'] = $cart_content_items['product_name'];
    		$data_order_detail['product_price'] = $cart_price;
    		$data_order_detail['product_qty'] = $cart_content_items['qty'];
    		OrderDetail::insert($data_order_detail);
    	}

    	// echo '<pre>';
    	// print_r($order_total);
    	// echo '<pre>';
    	return Redirect::to('place-order');
    }

   	public function place_order()
   	{
   		echo 'Đặt hàng thành công';
   		// return view();
   	}
}
