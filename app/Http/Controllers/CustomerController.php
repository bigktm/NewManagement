<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Customer;
use Session;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CustomerController extends Controller
{
   	public function customer_index() {
   		return view('site.customers.customer_register');
   	}
   	public function register_form(Request $request) 
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
      Session::put('message', 'Bạn đã đăng ký thành viên thành công'); 
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
}
