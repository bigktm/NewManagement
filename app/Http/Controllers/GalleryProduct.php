<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Exports\ExcelExports;
use App\Imports\ExcelImports;
use Session;
use Auth;
use Input;
use Storage;
use App\Traits\UploadImageStrait;
use App\Gallery;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class GalleryProduct extends Controller
{
    use UploadImageStrait;
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

        $data = array();
        $get_image = array();
        $get_image = $request->file('gallery_image');
        if( $get_image) {
            foreach($get_image as $fileItem) {
                $dataUploadProductGallery = $this->StorageImageUploadMultiple($fileItem, $folderName = $product_id);
                Gallery::where('product_id', $product_id)->update([
                    'gallery_image' => $dataUploadProductGallery['file_name'],
                    'gallery_image_path' => $dataUploadProductGallery['file_path'],
                ]);
            }
            return redirect()->back();   

        } 
	}
	public function delete_gallery($gallery_id){ 
		DB::table('tbl_gallery')->where('gallery_id', $gallery_id)->delete();
        Session::put('message','Xoá hình ảnh thành công');
        return redirect()->back();
	}
}
