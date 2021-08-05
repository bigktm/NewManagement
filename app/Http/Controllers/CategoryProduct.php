<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ProductModel;
use App\Brands;
use App\CategoryProductModel;
use App\Gallery;
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
    	$category = CategoryProductModel::orderBy('category_name', 'ASC')->get();
        return view('admin.template.category.add_category_product', compact('category'));
    }
    public function AllCategory () {

        $all_category_product = CategoryProductModel::orderBy('category_id', 'ASC')->paginate(10);
    	return view('admin.template.category.all_category_product', compact('all_category_product'));
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

        $category = CategoryProductModel::orderBy('category_name','ASC')->get();

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


    public function show_category_home(Request $request ,$category_slug){

        $product_list = ProductModel::join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')->where('tbl_product.category_id','desc')->paginate(10);
        $category_list = CategoryProductModel::orderBy('category_id', 'asc')->get();
        $brand_product = Brands::get(); 

        $category_by_slug = CategoryProductModel::where('category_slug',$category_slug)->get();

        foreach($category_by_slug as $key => $cate){
            $category_id = $cate->category_id;
        }

        $category_by_id = ProductModel::with('category')->where('category_id',$category_id)->orderBy('product_id','DESC')->paginate(6);

        $category_name = CategoryProductModel::where('tbl_category_product.category_slug',$category_slug)->limit(1)->get();

        return view('site.products.product_by_category')->with('category_list',$category_list)->with('brands_list',$brand_product)->with('category_name',$category_name)->with('category_by_id', $category_by_id);
    }

    public function show_brand_home(Request $request ,$brand_slug){

        $products_brand = ProductModel::join('tbl_brand', 'tbl_brand.brand_id', '=', 'tbl_product.brand_id')->where('tbl_product.brand_id','desc')->paginate(10);
        $brand_product = Brands::get(); 
        $category_list = CategoryProductModel::orderBy('category_id', 'asc')->get();
        $brand_by_slug = Brands::where('brand_slug',$brand_slug)->get();

        foreach($brand_by_slug as $key => $cate){
            $brand_id = $cate->brand_id;
        }

        $brand_by_id = ProductModel::with('brand')->where('brand_id',$brand_id)->orderBy('product_id','DESC')->paginate(6);

        $brand_name = Brands::where('tbl_brand.brand_slug',$brand_slug)->limit(1)->get();

        return view('site.products.product_by_brand')->with('category_list',$category_list)->with('brands_list',$brand_product)->with('brand_name',$brand_name)->with('brand_by_id', $brand_by_id);
    }
}
