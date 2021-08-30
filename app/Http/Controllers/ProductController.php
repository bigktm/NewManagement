<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ProductModel;
use App\Gallery;
use App\Brands;
use App\CategoryProductModel;
use App\AttributesProduct;
use App\AttributesProductValue;
use Illuminate\Support\Str;
use App\Exports\ExcelExports;
use App\Imports\ExcelImports;
use Session;
use Auth;
use Storage;
use App\Traits\UploadImageStrait;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect; 
use App\Components\Recusive;
session_start();

class ProductController extends Controller
{
    use UploadImageStrait;
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

    public function all_product() {
        $this->CheckLogin();
    	$all_product = ProductModel::join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->orderby('tbl_product.product_id','desc')->get();
    	$manager_product  = view('admin.template.products.all_product_list')->with('all_product',$all_product);
    	return view('admin.dashboard')->with('admin.template.products.all_product_list', $manager_product);
    }

    public function getCategory($CategoryParent) {
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->CategoryRecusive($CategoryParent);
        return $htmlOption;
    }

    public function add_product()
    {
        $this->CheckLogin();
    	$brand_product = Brands::orderby('brand_id', 'desc')->get();
        $htmlOption = $this->getCategory($CategoryParent = '');
        return view('admin.template.products.product_add_new', compact('htmlOption', 'brand_product'));
    }

    public function save_product(Request $request){

        // $this->validate($request, [
        //     'product_name' => 'required',
        //     'product_price' => 'required',
        //     'product_qty' => 'required',
        //     'product_sku' => 'required',
        //     'product_desc' => 'required',
        // ]);
        
        // $data['product_name'] = $request->product_name;
        // $data['product_slug'] = $request->product_slug;
        // $data['product_price'] = $request->product_price;
        // $data['product_price_sale'] = $request->product_price_sale;
        // $data['product_qty'] = $request->product_qty;
        // $data['product_sku'] = $request->product_sku;
        // $data['product_status'] = $request->product_status;
        // $data['product_desc'] = $request->product_desc;
        // $data['product_content'] = $request->product_content;
        // $data['product_keywords'] = $request->product_keywords;
        // $data['category_id'] = $request->category_product;
        // $data['brand_id'] = $request->brand_product;

        // $dataUploadProductImage = $this->StorageImageUpload($request, $fieldName = 'product_image', $folderName = $request->product_slug);

        // if(!empty($dataUploadProductImage)) {
        //     $data['product_image'] = $dataUploadProductImage['file_name'];
        //     $data['product_image_path'] = $dataUploadProductImage['file_path'];
        // }
        // $products = ProductModel::create($data);
        // $get_image = $request->file('gallery_image');
        // if( $get_image) {
        //     foreach($get_image as $fileItem) {
        //         $dataUploadProductGallery = $this->StorageImageUploadMultiple($fileItem, $folderName = $products->product_id);
        //         Gallery::insert([
        //             'product_id' => $products->product_id,
        //             'gallery_image' => $dataUploadProductGallery['file_name'],
        //             'gallery_image_path' => $dataUploadProductGallery['file_path'],
        //         ]);
        //     }

        // } 

        // $get_image = $request->file('gallery_image'); 
        $data = array(); 

        $data = [
            'attributes_name' => $request->attributes_name,
            'attributes_value' => $request->attributes_value,
            'attributes_qty' => $request->attributes_qty,
            'attributes_price' => $request->attributes_price,
        ];
        dd($data);

        // if($request->attributes_name) { 
        //     foreach($request->attributes_name as $val) {
        //         $attributes_id = AttributesProduct::create([
        //             'product_id' => '2',
        //             'attributes_name' => $val,
        //         ]);
        //         AttributesProductValue::insert([
        //             'attributes_id' => $id,
        //             'attributes_value' => $request->attributes_value,
        //             'attributes_qty' => $request->attributes_qty,
        //             'attributes_price' => $request->attributes_price,
        //             ]);
        //      } 
        // }



        // Session::put('message','Thêm sản phẩm thành công');
        // return Redirect::to('all-product-list');
    }

    public function edit_product($product_id) {
        $this->CheckLogin();
    	$brand = Brands::orderBy('brand_id','DESC')->get();

    	$edit_product = ProductModel::where('product_id', $product_id)->get();

        $gallerys = Gallery::where('product_id', $product_id)->get();

        foreach($edit_product as $val) {
            $parentID = $val->category_id;
        }
        $htmlOption = $this->getCategory($parentID);
    	return view('admin.template.products.edit_product', compact('edit_product', 'htmlOption', 'brand', 'gallerys'));
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
        $data['product_content'] = $request->product_content;
        $data['product_keywords'] = $request->product_keywords;
        $data['category_id'] = $request->category_product;
        $data['brand_id'] = $request->brand_product;

        $dataUploadProductImage = $this->StorageImageUpload($request, $fieldName = 'product_image', $folderName = $request->product_slug);

        if(!empty($dataUploadProductImage)) {
            $data['product_image'] = $dataUploadProductImage['file_name'];
            $data['product_image_path'] = $dataUploadProductImage['file_path'];
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


    // FRONT END


    public function detail_product(Request $request ,$product_slug) {



        $product_slug = ProductModel::where('product_slug',$product_slug)->get();

        foreach($product_slug as $key => $product){
            $product_id = $product->product_id;
            $category_id = $product->category_id;
        }
        $galery_product_thumb = Gallery::join('tbl_product', 'tbl_product.product_id', '=', 'tbl_gallery.product_id')->where('tbl_gallery.product_id', $product_id)->get();
        $data_product = ProductModel::join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('product_id', $product_id)->get(); 

        foreach ($data_product as $val) {
            $meta_title = $val->product_name;
            $meta_desc = $val->product_desc;
            $meta_keyworks = $val->product_keywords;
            $meta_canonical = $request->url();
        }

        $related_product = ProductModel::join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_category_product.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->orderby(DB::raw('RAND()'))->paginate(4);

        return view('site.products.product_detail')->with(compact('data_product','galery_product_thumb','related_product','meta_title','meta_desc','meta_keyworks','meta_canonical'));
    }
}
