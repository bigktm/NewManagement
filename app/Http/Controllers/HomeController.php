<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Slider;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        $slider_list = Slider::join('tbl_category_product','tbl_category_product.category_id','=','tbl_slider.category_id')->orderby('tbl_slider.slider_id','desc')->get();
        return view('site.home', compact('slider_list'));
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
    public function Checkout()
    {
        return view('site.checkout');
    }
}
