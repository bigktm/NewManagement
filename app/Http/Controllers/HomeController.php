<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index() {
    	return view('template.home');
    }
    public function ProductDetail() {
    	return view('template.product-detail');
    }
    public function Shop() {
    	return view('template.shop_list_view');
    }
    public function Cart() {
    	return view('template.cart');
    }
}
