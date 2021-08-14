<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use Validator;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
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

    public function adminLogin() {
        return view('admin.login');
    }
    public function adminRegister(Request $request) {

        $data = array();

        $data['admin_name'] = $request->admin_name;
        $data['admin_email'] = $request->admin_email;
        $data['admin_password'] = md5($request->admin_password);

        $admin_id = DB::table('tbl_admin')->insertGetId($data);

        Session::put('admin_id', $admin_id);
        Session::put('admin_name', $request->admin_name);

        return Redirect::to('dashboard');
    }
    public function loginPost(Request $request) 
    {
        $ad_email = $request->admin_email;
        $ad_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email', $ad_email)->where('admin_password', $ad_password)->first();

        if($result) {
            Session::put('admin_id', $result->id);
            Session::put('admin_name', $result->admin_name);
            return Redirect::to('dashboard');
        } else {
            Session::put('message', 'Tài khoản hoặc mật khẩu không đúng'); 
            return Redirect::to('/admin'); 
        }

    }
    public function logout_admin()
    {
        Session::flush();
        return Redirect::to('/admin');
    }
    public function Index()
    {
        $this->CheckLogin();
        return view('admin.template.overview');
    }
    public function Orders()
    {
        return view('admin.template.orders.orders');
    }
    public function ViewOrders()
    {
        return view('admin.template.orders.view_order');
    }
}
