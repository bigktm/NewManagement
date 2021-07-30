<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\CategoryProductModel;
use App\Exports\ExcelExports;
use App\Imports\ExcelImports;
use Session;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class CategoryProduct extends Controller
{
    public function AddCategory () {
    	$category = DB::table('tbl_category_product')->get();
        $manage_category_parent = view('admin.template.category.add_category_product')->with('category', $category);
        return view('admin.dashboard')->with('admin.template.category.add_category_product', $manage_category_parent);
    }
    public function AllCategory () {

        $category_product = CategoryProductModel::where('category_parent',0)->orderBy('category_id','DESC')->get();

        $all_category_product = DB::table('tbl_category_product')->orderBy('category_parent','DESC')->paginate(10);

    	$manage_category_product = view('admin.template.category.all_category_product')->with('all_category_product', $all_category_product)->with('category_product',$category_product);
    	return view('admin.dashboard')->with('admin.template.category.all_category_product', $manage_category_product);
    }
    public function save_category_product(Request $request){
        $data = array();

        $data['category_name'] = $request->category_product_name;
        $data['category_slug'] = $request->category_product_slug;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_keywords'] = $request->category_product_keywords;
        $data['category_parent'] = $request->category_parent;
        $data['category_status'] = $request->category_product_status;

        DB::table('tbl_category_product')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return Redirect::to('add-category-product');
    }

    public function active_category_product($category_product_id) {
    	DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status' => 1]);
    	Session::put('message','Danh mục này đã được hiển thị');
        return Redirect::to('all-category-product');
    }
    public function inactive_category_product($category_product_id) {
    	DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status' => 0]);
    	Session::put('message','Danh mục này đã được ẩn');
        return Redirect::to('all-category-product');
    }

    public function edit_category_product($category_product_id) {

        $category = CategoryProductModel::orderBy('category_id','DESC')->get();

        $edit_category_product = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();

    	$manage_category_product = view('admin.template.category.edit_category_product')->with('edit_category_product', $edit_category_product)->with('category',$category);
    	return view('admin.dashboard')->with('admin.template.category.edit_category_product', $manage_category_product);
    }
    public function update_category_product(Request $request,$category_product_id) {
    	$data = array();

        $data['category_name'] = $request->category_product_name;
        $data['category_slug'] = $request->category_product_slug;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_keywords'] = $request->category_product_keywords;
        $data['category_parent'] = $request->category_parent;

        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
    public function delete_category_product($category_product_id) {
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->delete();
        Session::put('message','Xoá danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
}
