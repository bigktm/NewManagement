<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Slider;
use App\ProductModel;
use App\CategoryProductModel;
use App\Gallery;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect; 
session_start();


class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index(Request $request)
    {

        $meta_title = 'HT Store - Sàn thời trang xuất khẩu Việt Nam';
        $meta_desc = 'HT Store - Hệ thống cửa hàng thời trang nam cao cấp hàng đầu Việt Nam. Thiết kế tinh tế, mang đến sự lịch lãm và mạnh mẽ';
        $meta_keyworks = 'HT Store, thoi trang cao cap, thoi trang nam';
        $meta_canonical = $request->url();


        $slider_list = Slider::join('tbl_category_product','tbl_category_product.category_id','=','tbl_slider.category_id')->orderby('tbl_slider.slider_id','desc')->get();
        $gallery_pro = ProductModel::join('tbl_gallery','tbl_gallery.product_id','=','tbl_product.product_id')->paginate(1);
        $product_new = ProductModel::orderby('product_id', 'desc')->paginate(4);

        $product_cate = CategoryProductModel::join('tbl_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')->where('tbl_category_product.category_id', 1)->get();

        return view('site.home')->with(compact('slider_list','product_new','gallery_pro','product_cate','meta_title','meta_desc','meta_keyworks','meta_canonical'));
    }
}
