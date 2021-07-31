<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function Index()
    {
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
