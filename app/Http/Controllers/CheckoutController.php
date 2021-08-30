<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\ProductModel;
use App\Coupon;
use App\Order;
use App\OrderDetail;
use App\Shipping;
use App\Province;
use App\City;
use App\Wards;
use App\FeeShip;
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

        $coupon_code = Coupon::where('coupon_type', 2)->orderBy('coupon_id', 'desc')->paginate(1);
        foreach($coupon_code as $val){
            $code = $val->coupon_code;
            $code_per = $val->coupon_price;
        }
        $coupon_freeship = Coupon::where('coupon_type', 1)->orderBy('coupon_id', 'desc')->paginate(1);
        foreach($coupon_freeship as $val){
            $code_free = $val->coupon_code;
            $price_free = $val->coupon_price;
        }
    	  $cart = Session::get('cart'); 

        $city = City::orderBy('matp', 'ASC')->get();

    	return view('site.cart.checkout', compact('cart','meta_title','meta_desc','meta_keyworks','meta_canonical','code_per','code','code_free','price_free','city'));
    }

    public function check_coupon(Request $request) {

        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('d/m/Y');
        $data = $request->all();
        $customer_id = Session::get('customer_id');
        if($customer_id) {
            $coupon_login = Coupon::where('coupon_code',$data['coupon'])->where('coupon_status',1)->first();
            if($coupon_login){
                $count_coupon = $coupon_login->count();
                if($count_coupon>0){
                    $coupon_session = Session::get('coupon');
                    if($coupon_session==true){
                        $is_avaiable = 0;
                        if($is_avaiable==0){
                            $cou[] = array(
                                'coupon_code' => $coupon_login->coupon_code,
                                'coupon_type' => $coupon_login->coupon_type,
                                'coupon_price' => $coupon_login->coupon_price,

                            );
                            Session::put('coupon',$cou);
                        }
                    } else {
                        $cou[] = array(
                            'coupon_code' => $coupon_login->coupon_code,
                            'coupon_type' => $coupon_login->coupon_type,
                            'coupon_price' => $coupon_login->coupon_price,

                        );
                        Session::put('coupon',$cou);
                    }
                    Session::save();
                    return redirect()->back()->with('message', 'Mã giảm giá đã được áp dụng');
                }

            }else{
                return redirect()->back()->with('message_error','Mã giảm giá không đúng - hoặc đã hết hạn');
            }

        } else {
            $coupon = Coupon::where('coupon_code',$data['coupon'])->where('coupon_status',1)->first();
            if($coupon){
                $count_coupon = $coupon->count();
                if($count_coupon>0){
                    $coupon_session = Session::get('coupon');
                    if($coupon_session==true){
                        $is_avaiable = 0;
                        if($is_avaiable==0){
                            $cou[] = array(
                                'coupon_code' => $coupon_login->coupon_code,
                                'coupon_type' => $coupon_login->coupon_type,
                                'coupon_price' => $coupon_login->coupon_price,

                            );
                            Session::put('coupon',$cou);
                        }
                    }else{
                        $cou[] = array(
                            'coupon_code' => $coupon_login->coupon_code,
                            'coupon_type' => $coupon_login->coupon_type,
                            'coupon_price' => $coupon_login->coupon_price,

                        );
                        Session::put('coupon',$cou);
                    }
                    Session::save();
                    return redirect()->back()->with('message', 'Mã giảm giá đã được áp dụng');
                }

            }else{
                return redirect()->back()->with('error','Mã giảm giá không đúng - hoặc đã hết hạn');
            }
        }
    }
    public function save_order_form(Request $request)
    {

    	$customer_id = Session::get('customer_id');
    	$cart_content = Session::get('cart');
      
      $data = array();

        // lấy thông tin select address

      $data['city'] = $request->city;
      $data['province'] = $request->province;
      $data['ward'] = $request->ward;

      $city = City::where('matp', $data['city'])->get();
      foreach ($city as $val) {
        $city_name = $val->name_city;
      }
      $province = Province::where('maqh', $data['province'])->get();
      foreach ($province as $val) {
        $name_quanhuyen = $val->name_quanhuyen;
      }
      $wards = Wards::where('xaid', $data['ward'])->get();
      foreach ($wards as $val) {
        $name_xaphuong = $val->name_xaphuong;
      }
   	// insert shipping table
      $data_shipping = array();

    	$data_shipping['shipping_name'] = $request->shipping_name;
    	$data_shipping['shipping_phone'] = $request->shipping_phone;
      $data_shipping['shipping_address'] = $request->shipping_address.' - '.$name_xaphuong.' - '.$name_quanhuyen.' - '.$city_name;
    	$data_shipping['shipping_notes'] = $request->shipping_notes;
    	$data_shipping['shipping_method'] = $request->shipping_method;

    	$shipping_id = Shipping::insertGetId($data_shipping);

		
		// insert order table

    	$data_order = array();

      $coupon = Session::get('coupon');
      $fee_default = 30000; 
      $total = 0;
    	$total_order = 0;
      $total_coupon = 0;

      

      foreach($cart_content as $cart_content_items){
        if($cart_content_items['product_price_sale'] > 0) {
          $cart_price = $cart_content_items['product_price_sale'];
          $subtotal = $cart_content_items['product_price_sale'] * $cart_content_items['qty'];
        }else {
          $cart_price = $cart_content_items['product_price'];
          $subtotal = $cart_content_items['product_price'] * $cart_content_items['qty'];
        }
        $total += $subtotal;
        if($coupon) {
          foreach($coupon as $val) {
            if($val['coupon_type'] == 1) {
              $total_coupon = $val['coupon_price'];
            }elseif($val['coupon_type'] == 2) {
              $total_coupon = ($total*$val['coupon_price'])/100;
            }
          }
          $total_order = $total + $fee_default - $total_coupon;
        } else {
          $total_order = $total + $fee_default - $total_coupon;
        }
      }

    	$data_order['customer_id'] = $customer_id;
    	$data_order['shipping_id'] = $shipping_id;
    	$data_order['order_status'] = 0;
    	$data_order['order_code'] = substr(md5(microtime()),rand(0,26),5);
    	$data_order['order_date'] = Carbon::now('Asia/Ho_Chi_Minh')->format('D-m-y');
    	$data_order['order_total'] = $total_order;
      $data_order['order_coupon'] = $total_coupon;

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
    		$data_order_detail['qty'] = $cart_content_items['qty'];
    		OrderDetail::insert($data_order_detail);
    	}

    	// echo '<pre>';
    	// print_r($total_coupon);
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

    public function select_delivery(Request $request) {
        $data = $request->all();
        if($data['action'] == "city") {
            $output = '';
            $select_province = Province::where('matp', $data['ma_id'])->orderBy('maqh', 'ASC')->get();
            $output = '<option value="" selected="">Chọn Quận/ Huyện</option>';
            foreach($select_province as $province) {
                $output .='<option value="'.$province->maqh.'" >'.$province->name_quanhuyen.'</option>';
            }
        }else {
            $select_wards = Wards::where('maqh', $data['ma_id'])->orderBy('xaid', 'ASC')->get();
            $output = '<option value="" selected="">Chọn Phường/ Xã</option>';
            foreach($select_wards as $ward) {
                $output .='<option value="'.$ward->xaid.'" >'.$ward->name_xaphuong.'</option>';
            }
        }
        echo $output;
    }

    // public function calculator_fee(Request $request){
    //   $data = $request->all();
    //   if($data['matp']) {
    //     $feeship = FeeShip::where('fee_matp',$data['matp'])->where('fee_maqh', $data['maqh'])->where('fee_xaid', $data['xaid'])->get();

    //     if($feeship == true) {
    //       foreach($feeship as $val) {
    //         Session::put('fee', $val->fee_feeship);
    //         return redirect()->back();
    //       }
    //     }
    //   }
    // }

    // public function fee_feeship() {
    //   $fee_ship = Session::get('fee');
    //   $output = '';
    //   if($fee_ship) 
    //   {
    //     $output.= '<span class="order-summary-emphasis" id="ship_fee">'.$fee_ship.'</span>';
    //   } else {
    //     $output.= '<span class="order-summary-emphasis" id="ship_fee">'. 10000 .'</span>';
    //   }
    //   echo $output;
    // }
}
