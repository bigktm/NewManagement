<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Slider;
use App\ProductModel;
use App\CategoryProductModel;
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
        $gallery_pro = ProductModel::join('tbl_gallery','tbl_gallery.product_id','=','tbl_product.product_id')->paginate(1);
        $product_new = ProductModel::orderby('product_id', 'desc')->paginate(4);

        $product_cate = CategoryProductModel::join('tbl_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')->where('tbl_category_product.category_id', 10)->get();
        // dd($product_cate);

        return view('site.home')->with('slider_list', $slider_list)->with('product_new', $product_new)->with('gallery_pro', $gallery_pro)->with('product_cate', $product_cate);
    }
    public function ProductDetail()
    {
        return view('site.product-detail');
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
