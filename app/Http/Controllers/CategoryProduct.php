<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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

    	$all_category_product = DB::table('tbl_category_product')->get();
    	$manage_category_product = view('admin.template.category.all_category_product')->with('all_category_product', $all_category_product);
    	return view('admin.dashboard')->with('admin.template.category.all_category_product', $manage_category_product);
    }
    public function save_category_product(Request $request){
        $data = array();

        $data['category_name'] = $request->category_product_name;
        $data['category_slug'] = $request->category_product_slug;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_keyworks'] = $request->category_product_keywords;
        $data['category_parent'] = $request->category_parent;
        $data['category_status'] = $request->category_product_status;

        DB::table('tbl_category_product')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return Redirect::to('add-category-product');
    }
}
