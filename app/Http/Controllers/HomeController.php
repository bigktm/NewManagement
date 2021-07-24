<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        return view('site.home');
    }
    public function ProductDetail()
    {
        return view('site.product-detail');
    }
    public function Shop()
    {
        return view('site.shop_list_view');
    }
    public function Cart()
    {
        return view('site.cart');
    }
}
