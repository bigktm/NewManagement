<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use Validator;
use App\Http\Requests;
use App\Http\Requests\RegisterAdminRequest;
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

    public function admin_login() {
        return view('admin.login');
    }
    public function admin_register() {
        return view('admin.register');
    }
    public function register_form(RegisterAdminRequest $request) {

        $data = array();

        $data['admin_name'] = $request->admin_name;
        $data['admin_email'] = $request->admin_email;
        $data['admin_password'] = md5($request->password);

        $admin_id = DB::table('tbl_admin')->insertGetId($data);

        Session::put('admin_id', $admin_id);
        Session::put('admin_name', $request->admin_name);

        return Redirect::to('dashboard');
    }
    public function login_form(Request $request) 
    {
        $ad_email = $request->admin_email;
        $ad_password = md5($request->admin_password);

        $this->validate($request,[
            'admin_email'=>'required|email',
            'admin_password'=>'required'
        ],
        [
            'admin_email.required' => ':attribute không được để trống',
            'admin_password.required' => ':attribute không được để trống',
        ],
        [
            'admin_email' => 'Email',
            'admin_password' => 'Mật khẩu',
        ]);

        $result = DB::table('tbl_admin')->where('admin_email', $ad_email)->where('admin_password', $ad_password)->first();

        if($result) {
            Session::put('admin_id', $result->id);
            Session::put('admin_name', $result->admin_name);
            return Redirect::to('dashboard');
        } else {
            Session::put('message_login', 'Tài khoản hoặc mật khẩu không đúng'); 
            return Redirect::to('/admin'); 
        }

    }
    public function admin_logout()
    {
        Session::flush();
        return Redirect::to('/admin');
    }
}
