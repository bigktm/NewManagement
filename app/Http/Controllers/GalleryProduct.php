<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Exports\ExcelExports;
use App\Imports\ExcelImports;
use Session;
use Auth;
use App\Gallery;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class GalleryProduct extends Controller
{
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
	public function add_gallery ($product_id)
	{	
		$this->CheckLogin();
		$product_id = $product_id;
		$show_gallery = Gallery::where('product_id', $product_id)->get();
		$manage_gallery = view('admin.template.gallery.gallery_add')->with(compact('product_id'))->with('show_gallery', $show_gallery);
		return view('admin.dashboard')->with('admin.template.gallery.gallery_add', $manage_gallery);
	}
	public function insert_gallery(Request $request,$product_id){

		$get_image = $request->file('gallery_image');

        if($get_image) {

        	$get_image_name = $get_image->getClientOriginalName();
        	$name_image = current(explode('.', $get_image_name));
        	$new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

        	$get_image->move('public/uploads/gallery_product', $new_image);

        	$data['gallery_image'] = $new_image;
        	$data['product_id'] = $product_id;

        	DB::table('tbl_gallery')->insert($data);
        	Session::put('message','Thêm hình ảnh sản phẩm thành công');
        	return redirect()->back();
        }

	}
	public function delete_gallery($gallery_id){ 
		DB::table('tbl_gallery')->where('gallery_id', $gallery_id)->delete();
        Session::put('message','Xoá hình ảnh thành công');
        return redirect()->back();
	}
}
