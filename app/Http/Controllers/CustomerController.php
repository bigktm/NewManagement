<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Shipping;
use Session;
use Auth;
use App\Http\Requests;
use App\Http\Requests\RegisterCustomerRequest;
use App\Http\Requests\UpdateAccount;
use Illuminate\Support\Facades\Redirect;
session_start();

class CustomerController extends Controller
{
    public function CheckLoginCustomer() {
      if(!Session::get('customer_id')){
        Redirect::to('customer/login')->send();
      }
    }
   	public function customer_index(Request $request) {

      $meta_title = 'Đăng nhập thành viên';
      $meta_desc = 'HT Store - Hệ thống cửa hàng thời trang nam cao cấp hàng đầu Việt Nam. Thiết kế tinh tế, mang đến sự lịch lãm và mạnh mẽ';
      $meta_keyworks = 'HT Store, thoi trang cao cap, thoi trang nam';
      $meta_canonical = $request->url();

   		return view('site.customers.customer_register', compact('meta_title','meta_desc','meta_keyworks','meta_canonical'));
   	}
   	public function register_form(RegisterCustomerRequest $request) 
   	{
   		$data = array();

   		$data['customer_name'] = $request->customer_name;
      $data['customer_email'] = $request->customer_email;
      $data['customer_password'] = md5($request->customer_password);
      $data['customer_phone'] = $request->customer_phone;


      $customer_id = Customer::insertGetId($data);
      Session::put('customer_id', $customer_id);
      Session::put('customer_name', $request->customer_name); 
      Session::put('customer_phone', $request->customer_phone); 
      return Redirect::to('/');
   	}
   	public function login_form(Request $request) 
   	{
        $data_cart = Session::get('cart');
        $email = $request->customer_email;
        $password = md5($request->customer_password);
        $result = Customer::where('customer_email', $email)->where('customer_password', $password)->first();

        if($result) {
	        Session::put('customer_id', $result->customer_id);
	        Session::put('customer_name', $result->customer_name); 
          Session::put('customer_phone', $result->customer_phone);

          if($data_cart) {
            return Redirect::to('/checkout');
          } else {
            return Redirect::to('/');
          }

        }else {

        	Session::put('message_error', 'Tài khoản hoặc mật khẩu không đúng'); 
        	return Redirect::to('/customer/login');	
        }
   	}

    public function logout_customer()
    {
        Session::forget('customer_id');
        return Redirect::to('/');
    }


    // Admin

    public function all_customer() 
    {
      $customers_list = Customer::orderBy('customer_id', 'desc')->paginate(10);
      return view('admin.template.customers.customer_list', compact('customers_list'));
    }

    public function delete_customer($customer_id)
    {
        Customer::where('customer_id', $customer_id)->delete();
        Session::put('message','Xoá thành viên thành công');
        return Redirect::to('customer-list');
    }


    public function your_orders(Request $request)
    {
      $this->CheckLoginCustomer();
      $meta_title = 'Đơn hàng của bạn';
      $meta_desc = 'HT Store - Hệ thống cửa hàng thời trang nam cao cấp hàng đầu Việt Nam. Thiết kế tinh tế, mang đến sự lịch lãm và mạnh mẽ';
      $meta_keyworks = 'HT Store, thoi trang cao cap, thoi trang nam';
      $meta_canonical = $request->url();

      $customer_id = Session::get('customer_id');

      $order_all = Customer::join('tbl_order', 'tbl_customers.customer_id', '=', 'tbl_order.customer_id')->where('tbl_customers.customer_id', $customer_id)->orderBy('order_id', 'desc')->paginate(10);

      return view('site.customers.customer_orders', compact('meta_title','meta_desc','meta_keyworks','meta_canonical', 'order_all'));

    }
    public function view_your_order(Request $request, $order_id) {
      $this->CheckLoginCustomer();
      $meta_title = 'Đơn hàng của bạn';
      $meta_desc = 'HT Store - Hệ thống cửa hàng thời trang nam cao cấp hàng đầu Việt Nam. Thiết kế tinh tế, mang đến sự lịch lãm và mạnh mẽ';
      $meta_keyworks = 'HT Store, thoi trang cao cap, thoi trang nam';
      $meta_canonical = $request->url();

      $order_items = OrderDetail::join('tbl_order','tbl_order.order_id','=','tbl_order_details.order_id')
      ->join('tbl_product','tbl_product.product_id','=','tbl_order_details.product_id')->where('tbl_order_details.order_id', $order_id)->select('tbl_order.order_id','tbl_order_details.*', 'tbl_product.*')->get();

      $data_order = Order::join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
      ->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')->where('tbl_order.order_id', $order_id)
      ->select('tbl_order.*','tbl_customers.*','tbl_shipping.*')->first();

      return view('site.customers.customer_order_detail', compact('meta_title','meta_desc','meta_keyworks','meta_canonical', 'order_items', 'data_order'));
    }

    public function edit_account(Request $request) {
      $this->CheckLoginCustomer();
      $meta_title = 'Tài khoản của bạn';
      $meta_desc = 'HT Store - Hệ thống cửa hàng thời trang nam cao cấp hàng đầu Việt Nam. Thiết kế tinh tế, mang đến sự lịch lãm và mạnh mẽ';
      $meta_keyworks = 'HT Store, thoi trang cao cap, thoi trang nam';
      $meta_canonical = $request->url();

      $customer_id = Session::get('customer_id');
      $data_customer = Customer::where('customer_id', $customer_id)->get();
      return view('site.customers.customer_account', compact('meta_title','meta_desc','meta_keyworks','meta_canonical','data_customer'));
    }

    public function update_account(UpdateAccount $request) 
    {

      $customer_id = Session::get('customer_id');
      $c_password = md5($request->customer_password);

      $result_pw = Customer::where('customer_password', $c_password)->first();

      $data = array();

      $data['customer_name'] = $request->customer_name;
      $data['customer_email'] = $request->customer_email;
      $data['customer_phone'] = $request->customer_phone;

      if($result_pw) {
        if($request->password) {
          $data['customer_password'] = md5($request->password);
        }else {
          $data['customer_password'] = md5($request->customer_password);
        }
        Customer::where('customer_id', $customer_id)->update($data);
        Session::put('message', 'Cập nhật thông tin tài khoản thành công'); 
        return redirect()->back();
      }else {
        Session::put('message_error', 'Mật khẩu cũ không đúng');
        return redirect()->back(); 
      }

      Session::put('customer_id', $customer_id);
      Session::put('customer_name', $request->customer_name); 
      Session::put('customer_phone', $request->customer_phone); 
      return redirect()->back();
    }
}
