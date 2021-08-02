<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ProductModel;
use Illuminate\Support\Str;
use App\Exports\ExcelExports;
use App\Imports\ExcelImports;
use Session;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect; 
session_start();

class ProductController extends Controller
{
    public function AllProduct() {

    	$all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->orderby('tbl_product.product_id','desc')->paginate(10);
    	$manager_product  = view('admin.template.products.all_product_list')->with('all_product',$all_product);
    	return view('admin.dashboard')->with('admin.template.products.all_product_list', $manager_product);
    }
    public function AddProduct()
    {
    	$cat_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
    	$brand_product = DB::table('tbl_brand')->orderby('brand_id', 'desc')->get();
        return view('admin.template.products.product_add_new')->with('cat_product', $cat_product)->with('brand_product', $brand_product);
    }

    public function save_product(Request $request){

        $this->validate($request, [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_qty' => 'required',
            'product_sku' => 'required',
            'product_desc' => 'required',
        ]);
        
        $data = array();

        $data['product_name'] = $request->product_name;
        $data['product_slug'] = $request->product_slug;
        $data['product_price'] = $request->product_price;
        $data['product_price_sale'] = $request->product_price_sale;
        $data['product_qty'] = $request->product_qty;
        $data['product_sku'] = $request->product_sku;
        $data['product_status'] = $request->product_status;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_desc;
        $data['product_keywords'] = $request->product_keywords;
        $data['category_id'] = $request->category_product;
        $data['brand_id'] = $request->brand_product;

        $get_image = $request->file('product_image');

        if($get_image) {

        	$get_image_name = $get_image->getClientOriginalName();
        	$name_image = current(explode('.', $get_image_name));
        	$new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

        	$get_image->move('public/uploads/products', $new_image);

        	$data['product_image'] = $new_image;

        	DB::table('tbl_product')->insert($data);
        	Session::put('message','Thêm sản phẩm thành công');
        	return Redirect::to('all-product-list');
        }

        DB::table('tbl_product')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('all-product-list');
    }

    public function edit_product($product_id) {
    	$category = DB::table('tbl_category_product')->orderBy('category_id','DESC')->get();
    	$brand = DB::table('tbl_brand')->orderBy('brand_id','DESC')->get();

    	$edit_product = DB::table('tbl_product')->where('product_id', $product_id)->get();
    	$manage_product = view('admin.template.products.edit_product')->with('edit_product', $edit_product)->with('category',$category)->with('brand',$brand);
    	return view('admin.dashboard')->with('admin.template.products.edit_product', $manage_product);
    }
    public function update_product(Request $request,$product_id) {

        $this->validate($request, [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_qty' => 'required',
            'product_sku' => 'required',
            'product_desc' => 'required',
        ]);

    	$data = array();

        $data['product_name'] = $request->product_name;
        $data['product_slug'] = $request->product_slug;
        $data['product_price'] = $request->product_price;
        $data['product_price_sale'] = $request->product_price_sale;
        $data['product_qty'] = $request->product_qty;
        $data['product_sku'] = $request->product_sku;
        $data['product_status'] = $request->product_status;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_desc;
        $data['product_keywords'] = $request->product_keywords;
        $data['category_id'] = $request->category_product;
        $data['brand_id'] = $request->brand_product;

        $get_image = $request->file('product_image');

        if($get_image) {

        	$get_image_name = $get_image->getClientOriginalName();
        	$name_image = current(explode('.', $get_image_name));
        	$new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

        	$get_image->move('public/uploads/products', $new_image);

        	$data['product_image'] = $new_image;

        	DB::table('tbl_product')->where('product_id', $product_id)->update($data);
        	Session::put('message','Cập nhật sản phẩm thành công');
        	return Redirect::to('all-product-list');
        }

        DB::table('tbl_product')->where('product_id', $product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('all-product-list');
    }
    public function delete_product($product_id) {
        DB::table('tbl_product')->where('product_id', $product_id)->delete();
        Session::put('message','Xoá sản phẩm thành công');
        return Redirect::to('all-product-list');
    }
}
