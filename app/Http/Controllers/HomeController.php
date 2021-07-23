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
}
