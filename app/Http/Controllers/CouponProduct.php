<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Exports\ExcelExports;
use App\Imports\ExcelImports;
use Session;
use Auth;
use App\Coupon;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CouponProduct extends Controller
{
    public function CheckLogin() {
        if(Session::get('admin_id')){
            $admin_id = Session::get('admin_id');
        }else{
            $admin_id = Auth::id();
        }
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        } 
    }
    public function add_coupon()
    {
        $this->CheckLogin();
    	return view('admin.template.coupon.add_coupon');
    }

    public function save_coupon(Request $request)
    {
    	$data = array();
    	$data['coupon_code'] = $request->coupon_code;
    	$data['coupon_type'] = $request->coupon_type;
    	$data['coupon_desc'] = $request->coupon_desc;
    	$data['coupon_price'] = $request->coupon_price;
    	$data['coupon_expiry'] = $request->coupon_expiry;
    	$data['coupon_status'] = $request->coupon_status;

    	Coupon::insert($data);
    	Session::put('message', 'Thêm mã giảm giá thành công');
    	return redirect()->back();
    }

    public function all_coupon()
    {
        $this->CheckLogin();
    	$all_coupon = Coupon::paginate(10);
    	return view('admin.template.coupon.all_coupon', compact('all_coupon'));
    }

    public function edit_coupon($coupon_id)
    {
        $this->CheckLogin();
    	$coupon_data = Coupon::where('coupon_id', $coupon_id)->get();
    	return view('admin.template.coupon.edit_coupon', compact('coupon_data'));
    }
    public function update_coupon(Request $request, $coupon_id)
    {
    	$data = array();
    	$data['coupon_code'] = $request->coupon_code;
    	$data['coupon_type'] = $request->coupon_type;
    	$data['coupon_desc'] = $request->coupon_desc;
    	$data['coupon_price'] = $request->coupon_price;
    	$data['coupon_expiry'] = $request->coupon_expiry;
    	$data['coupon_status'] = $request->coupon_status;

    	Coupon::where('coupon_id', $coupon_id)->update($data);
    	Session::put('message', 'Cập nhật mã giảm giá thành công');
    	return redirect()->back();
    }
}
