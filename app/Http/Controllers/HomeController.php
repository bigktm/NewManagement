<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Slider;
use App\ProductModel;
use App\Gallery;

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
        $gallery_pro = Gallery::join('tbl_product','tbl_product.product_id','=','tbl_gallery.product_id')->orderby('tbl_gallery.product_id','desc')->paginate(1);
        $product_new = ProductModel::where('product_status','1')->orderBy('product_id','DESC')->paginate(4);

        return view('site.home')->with('slider_list', $slider_list)->with('product_new', $product_new)->with('gallery_pro', $gallery_pro);
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
