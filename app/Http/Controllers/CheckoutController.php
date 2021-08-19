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
    public function checkout(Request $request) {
        
        $meta_title = 'Thanh toán giỏ hàng';
        $meta_desc = 'HT Store - Hệ thống cửa hàng thời trang nam cao cấp hàng đầu Việt Nam. Thiết kế tinh tế, mang đến sự lịch lãm và mạnh mẽ';
        $meta_keyworks = 'HT Store, thoi trang cao cap, thoi trang nam';
        $meta_canonical = $request->url();

    	$cart = Session::get('cart'); 
    	return view('site.cart.checkout', compact('cart','meta_title','meta_desc','meta_keyworks','meta_canonical'));
    }

    public function save_order_form(Request $request)
    {

    	$customer_id = Session::get('customer_id');
    	$cart_content = Session::get('cart');

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
    	$total_order = 0;
    	foreach($cart_content as $cart_content_items){
    		if($cart_content_items['product_price_sale'] > 0) {
    			$cart_price = $cart_content_items['product_price_sale'];
    			$subtotal = $cart_content_items['product_price_sale'] * $cart_content_items['qty'];
    		}else {
    			$cart_price = $cart_content_items['product_price'];
    			$subtotal = $cart_content_items['product_price'] * $cart_content_items['qty'];
    		}
    		$total_order += $subtotal;
    	}
    	$data_order['customer_id'] = $customer_id;
    	$data_order['shipping_id'] = $shipping_id;
    	$data_order['order_status'] = 0;
    	$data_order['order_code'] = substr(md5(microtime()),rand(0,26),5);
    	$data_order['order_date'] = Carbon::now('Asia/Ho_Chi_Minh')->format('D-m-y');
    	$data_order['order_total'] = $total_order;

    	$order_id = Order::insertGetId($data_order);
        Session::put('order_id', $order_id);
    	// insert order detail table

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

   	public function place_order(Request $request)
   	{
        $meta_title = 'Thanh toán thành công';
        $meta_desc = 'HT Store - Hệ thống cửa hàng thời trang nam cao cấp hàng đầu Việt Nam. Thiết kế tinh tế, mang đến sự lịch lãm và mạnh mẽ';
        $meta_keyworks = 'HT Store, thoi trang cao cap, thoi trang nam';
        $meta_canonical = $request->url();
   		Session::forget('cart');
        $order_id = Session::get('order_id');

   		$order_detail = OrderDetail::join('tbl_order','tbl_order.order_id','=','tbl_order_details.order_id')->where('tbl_order_details.order_id', $order_id)->select('tbl_order.*','tbl_order_details.*')->get();

        $order_info = Order::join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
        ->join('tbl_order_details', 'tbl_order.order_id','=','tbl_order_details.order_id')
        ->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')->where('tbl_order.order_id', $order_id)
        ->select('tbl_order.*','tbl_customers.customer_name','tbl_shipping.shipping_method', 'tbl_order_details.*')->first();

        //    echo '<pre>';
        // print_r($order_info);
        //    echo '</pre>';

        return view('site.cart.order_received', compact('order_detail','order_info','meta_title','meta_desc','meta_keyworks','meta_canonical'));
   	}
}
