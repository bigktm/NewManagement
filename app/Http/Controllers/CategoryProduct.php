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
use App\Components\Recusive;
session_start();


class CategoryProduct extends Controller
{
    private $category;
    public function __construct(CategoryProductModel $category) {
        $this->category = $category;
    }

    public function CheckLogin() {
        if(Session::get('admin_id')){
            $admin_id = Session::get('admin_id');
        }else{
            $admin_id = Auth::id();
        }
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        } 
    }

    public function all_category_product () {
        $this->CheckLogin();
        $all_category_product = CategoryProductModel::orderBy('category_id', 'ASC')->get();
        return view('admin.template.category.all_category_product', compact('all_category_product'));
    }

    public function getCategory($CategoryParent) {
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->CategoryRecusive($CategoryParent);
        return $htmlOption;
    }

    public function add_category_product () {
        $this->CheckLogin();
        $htmlOption = $this->getCategory($CategoryParent = '');
        return view('admin.template.category.add_category_product', compact('htmlOption'));
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
    public function edit_category_product($category_product_id) {
        $this->CheckLogin();
        $category_by_id = $this->category->where('category_id',$category_product_id)->get();
        foreach($category_by_id as $val) {
            $parentID = $val->category_parent;
        }
        $htmlOption = $this->getCategory($parentID);
        return view('admin.template.category.edit_category_product', compact('category_by_id','htmlOption'));
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

    public function show_category_home(Request $request ,$category_slug){

        $brand_product = Brands::get(); 

        $category_by_slug = CategoryProductModel::where('category_slug',$category_slug)->get();

        foreach($category_by_slug as $key => $cate){
            $category_id = $cate->category_id;
            $meta_title = $cate->category_name;
            $meta_desc = $cate->category_desc;
            $meta_keyworks = $cate->category_keywords;
            $meta_canonical = $request->url();
        }


        $category_list = CategoryProductModel::where('category_status','1')->orderby('category_parent','desc')->get(); 
         

        $category_by_id = ProductModel::with('category')->where('category_id',$category_id)->orderBy('product_id','DESC')->paginate(9);


        $category_name = CategoryProductModel::where('tbl_category_product.category_slug',$category_slug)->limit(1)->get();

        return view('site.products.product_by_category')->with(compact('category_list','brand_product','category_name','category_by_id','meta_title','meta_desc','meta_keyworks','meta_canonical'));
    }

    public function show_brand_home(Request $request ,$brand_slug){

        $brand_product = Brands::get(); 
        $category_list = CategoryProductModel::orderBy('category_id', 'asc')->get();
        $brand_by_slug = Brands::where('brand_slug',$brand_slug)->get();

        foreach($brand_by_slug as $key => $cate){
            $brand_id = $cate->brand_id;
            $meta_title = $cate->brand_name;
            $meta_desc = $cate->brand_desc;
            $meta_keyworks = $cate->brand_name;
            $meta_canonical = $request->url();
        }

        $brand_by_id = ProductModel::with('brand')->where('brand_id',$brand_id)->orderBy('product_id','DESC')->paginate(9);

        $brand_name = Brands::where('tbl_brand.brand_slug',$brand_slug)->limit(1)->get();
        
        return view('site.products.product_by_brand')->with(compact('category_list','brand_product','brand_name','brand_by_id','meta_title','meta_desc','meta_keyworks','meta_canonical'));
    }
}
