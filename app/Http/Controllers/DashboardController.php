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

class DashboardController extends Controller
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
    public function overview()
    {
        $this->CheckLogin();
        return view('admin.template.overview');
    }
}
