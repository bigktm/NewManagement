<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Slider;
use App\CategoryProductModel;
use Illuminate\Support\Facades\Redirect;
session_start();

class SliderController extends Controller
{
    public function all_slider() {
    	$slider_list = Slider::join('tbl_category_product','tbl_category_product.category_id','=','tbl_slider.category_id')->orderby('tbl_slider.slider_id','desc')->get();

    	return view('admin.template.slider.all_slider', compact('slider_list'));
    }
    public function add_slider () {
    	$category = DB::table('tbl_category_product')->orderBy('category_id','DESC')->get();
        return view('admin.template.slider.add_slider')->with('category', $category);
    }
    public function save_slider(Request $request){
        $data = array();

        $data['slider_title'] = $request->slider_title;
        $data['slider_subtitle'] = $request->slider_subtitle;
        $data['category_id'] = $request->category_slider;
        $data['slider_image'] = $request->slider_image;

        $get_image = $request->file('slider_image');

        if($get_image) {

        	$get_image_name = $get_image->getClientOriginalName();
        	$name_image = current(explode('.', $get_image_name));
        	$new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

        	$get_image->move('public/uploads/sliders', $new_image);

        	$data['slider_image'] = $new_image;

        	DB::table('tbl_slider')->insert($data);
        	Session::put('message','Thêm slider thành công');
        	return Redirect::to('all-slider');
        }

        DB::table('tbl_slider')->insert($data);
        Session::put('message','Thêm slider thành công');
        return Redirect::to('all-slider');
    }
    public function edit_slider($slider_id) {
    	$category = CategoryProductModel::orderBy('category_id','DESC')->get();
    	$edit_slider = DB::table('tbl_slider')->where('slider_id', $slider_id)->get();
    	$manage_slider = view('admin.template.slider.edit_slider')->with('edit_slider', $edit_slider)->with('category', $category);
    	return view('admin.dashboard')->with('admin.template.slider.edit_slider', $manage_slider);
    }
    public function update_slider(Request $request,$slider_id) {
    	$data = array();

        $data['slider_title'] = $request->slider_title;
        $data['slider_subtitle'] = $request->slider_subtitle;
        $data['category_id'] = $request->category_slider;

        $get_image = $request->file('slider_image');

        if($get_image) {

        	$get_image_name = $get_image->getClientOriginalName();
        	$name_image = current(explode('.', $get_image_name));
        	$new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

        	$get_image->move('public/uploads/sliders', $new_image);

        	$data['slider_image'] = $new_image;

        	DB::table('tbl_slider')->where('slider_id', $slider_id)->update($data);
        	Session::put('message','Cập nhật slider thành công');
        	return Redirect::to('all-slider');
        }

        DB::table('tbl_slider')->where('slider_id', $slider_id)->update($data);
        Session::put('message','Cập nhật slider thành công');
        return Redirect::to('all-slider');
    }
    public function delete_slider($slider_id) {
        DB::table('tbl_slider')->where('slider_id', $slider_id)->delete();
        Session::put('message','Xoá slider thành công');
        return Redirect::to('all-slider');
    }
}
