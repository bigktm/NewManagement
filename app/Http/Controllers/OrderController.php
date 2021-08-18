<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use Validator;
use App\Order;
use App\OrderDetail;
use App\Shipping;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class OrderController extends Controller
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
    
    public function All_order()
    {
    	$this->CheckLogin();

    	$order_all = Order::join('tbl_customers','tbl_customers.customer_id','=','tbl_order.customer_id')
   		->select('tbl_order.*','tbl_customers.customer_name')->orderBy('tbl_order.order_id', 'desc')->paginate(10);
        return view('admin.template.orders.orders', compact('order_all'));
    }

    public function view_order_detail($order_id)
    {
        
    	$this->CheckLogin();

        $order_items = OrderDetail::join('tbl_order','tbl_order.order_id','=','tbl_order_details.order_id')
        ->join('tbl_product','tbl_product.product_id','=','tbl_order_details.product_id')->where('tbl_order_details.order_id', $order_id)->select('tbl_order.order_id','tbl_order_details.*', 'tbl_product.product_image')->get();

        $data_order = Order::join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
        ->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')->where('tbl_order.order_id', $order_id)
        ->select('tbl_order.*','tbl_customers.*','tbl_shipping.*')->first();

        $fee = 30000;

        return view('admin.template.orders.view_order')->with('order_items', $order_items)->with('data_order', $data_order)->with('fee', $fee);
    }
    public function edit_order_detail($order_id)
    {
        
        $this->CheckLogin();

        $order_items = OrderDetail::join('tbl_order','tbl_order.order_id','=','tbl_order_details.order_id')
        ->join('tbl_product','tbl_product.product_id','=','tbl_order_details.product_id')->where('tbl_order_details.order_id', $order_id)->select('tbl_order.order_id','tbl_order_details.*', 'tbl_product.product_image')->get();

        $data_order = Order::join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
        ->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')->where('tbl_order.order_id', $order_id)
        ->select('tbl_order.*','tbl_customers.*','tbl_shipping.*')->first();

        $fee = 30000;

        return view('admin.template.orders.edit_order')->with('order_items', $order_items)->with('data_order', $data_order)->with('fee', $fee);
    }

    public function update_order(Request $request,$order_id) {

        $data = array();

        $data['order_status'] = $request->order_status;

        DB::table('tbl_order')->where('order_id', $order_id)->update($data);
        Session::put('message','Cập nhật trạng thái đơn hàng thành công');
        return Redirect::to('orders');
    }
    public function delete_order($order_id) {

        DB::table('tbl_order')->where('order_id', $order_id)->delete();
        Session::put('message','Xoá đơn hàng thành công');
        return Redirect::to('orders');
    }
}
