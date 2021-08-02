<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Exports\ExcelExports;
use App\Imports\ExcelImports;
use Session;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BrandProduct extends Controller
{
    public function AddBrand () {
        return view('admin.template.brand.add_brand_product');
    }
    public function AllBrand () {

    	$all_brand_product = DB::table('tbl_brand')->paginate(5);
    	$manage_brand_product = view('admin.template.brand.all_brand_product')->with('all_brand_product', $all_brand_product);
    	return view('admin.dashboard')->with('admin.brand.category.all_brand_product', $manage_brand_product);
    }
    public function save_brand_product(Request $request){

        $data = array();

        $data['brand_name'] = $request->brand_product_name;
        $data['brand_slug'] = $request->brand_product_slug;
        $data['brand_desc'] = $request->brand_product_desc;
        $data['brand_status'] = $request->brand_product_status;

        DB::table('tbl_brand')->insert($data);
        Session::put('message','Thêm thương hiệu sản phẩm thành công');
        return Redirect::to('add-brand-product');
    }

    public function active_brand_product($brand_id) {
    	DB::table('tbl_brand')->where('brand_id', $brand_id)->update(['brand_status' => 1]);
    	Session::put('message','Thương hiệu này đã được hiển thị');
        return Redirect::to('all-brand-product');
    }
    public function inactive_brand_product($brand_id) {
    	DB::table('tbl_brand')->where('brand_id', $brand_id)->update(['brand_status' => 0]);
    	Session::put('message','Thương hiệu này đã được ẩn');
        return Redirect::to('all-brand-product');
    }

    public function edit_brand_product($brand_id) {
    	$edit_brand_product = DB::table('tbl_brand')->where('brand_id', $brand_id)->get();
    	$manage_brand_product = view('admin.template.brand.edit_brand_product')->with('edit_brand_product', $edit_brand_product);
    	return view('admin.dashboard')->with('admin.brand.category.edit_brand_product', $manage_brand_product);
    }
    public function update_brand_product(Request $request,$brand_id) {
    	$data = array();

        $data['brand_name'] = $request->brand_product_name;
        $data['brand_slug'] = $request->brand_product_slug;
        $data['brand_desc'] = $request->brand_product_desc;

        DB::table('tbl_brand')->where('brand_id', $brand_id)->update($data);
        Session::put('message','Cập nhật thương hiệu thành công');
        return Redirect::to('all-brand-product');
    }
    public function delete_brand_product($brand_id) {
        DB::table('tbl_brand')->where('brand_id', $brand_id)->delete();
        Session::put('message','Xoá thương hiệu thành công');
        return Redirect::to('all-brand-product');
    }
}
