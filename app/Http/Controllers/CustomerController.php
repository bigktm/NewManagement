<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Customer;
use Session;
use Auth;
use App\Http\Requests;
use App\Http\Requests\RegisterCustomerRequest;
use Illuminate\Support\Facades\Redirect;
session_start();

class CustomerController extends Controller
{
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
}
