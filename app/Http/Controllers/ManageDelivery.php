<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use App\Exports\ExcelExports;
use App\Imports\ExcelImports;
use Session;
use Auth;
use App\City;
use App\Province;
use App\Wards;
use App\FeeShip;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class ManageDelivery extends Controller
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

    public function add_delivery() {
    	$this->CheckLogin();
    	$city = City::orderBy('matp', 'ASC')->get();

    	return view('admin.template.delivery.add_delivery', compact('city'));
    }
    public function select_delivery(Request $request) {
        $data = $request->all();
        if($data['action'] == "city") {
            $output = '';
            $select_province = Province::where('matp', $data['ma_id'])->orderBy('maqh', 'ASC')->get();
            $output = '<option value="" selected="">Chọn Quận/ Huyện</option>';
            foreach($select_province as $province) {
                $output .='<option value="'.$province->maqh.'" >'.$province->name_quanhuyen.'</option>';
            }
        }else {
            $select_wards = Wards::where('maqh', $data['ma_id'])->orderBy('xaid', 'ASC')->get();
            $output = '<option value="" selected="">Chọn Phường/ Xã</option>';
            foreach($select_wards as $ward) {
                $output .='<option value="'.$ward->xaid.'" >'.$ward->name_xaphuong.'</option>';
            }
        }
        echo $output;
    }

    public function save_delivery(Request $request) {
    	$this->CheckLogin();
    	$data = array();
    	$data['fee_matp'] = $request->city;
    	$data['fee_maqh'] = $request->province;
    	$data['fee_xaid'] = $request->ward;
    	$data['fee_feeship'] = $request->fee_feeship;

    	FeeShip::insert($data);
    	Session::put('message', 'Đã thêm phí vận chuyển thành công');
    	return redirect()->back();
    }

    public function all_delivery() {
    	$this->CheckLogin();

    	$all_delivery = FeeShip::join('tbl_tinhthanhpho', 'tbl_feeship.fee_matp', '=', 'tbl_tinhthanhpho.matp')
    	->join('tbl_quanhuyen', 'tbl_feeship.fee_maqh', '=', 'tbl_quanhuyen.maqh')
    	->join('tbl_xaphuongthitran', 'tbl_feeship.fee_xaid', '=', 'tbl_xaphuongthitran.xaid')
    	->select('tbl_tinhthanhpho.name_city', 'tbl_quanhuyen.name_quanhuyen', 'tbl_xaphuongthitran.name_xaphuong', 'tbl_feeship.*')
    	->orderBy('fee_id', 'ASC')->paginate(10);

    	return view('admin.template.delivery.all_delivery', compact('all_delivery'));
    }

    public function update_delivery(Request $request, $fee_id) {
    	$this->CheckLogin();
    	$data = array();
    	$data['fee_feeship'] = $request->fee_feeship;

    	FeeShip::where('fee_id', $fee_id)->update($data);
    	Session::put('message', 'Đã sửa phí vận chuyển thành công');
    	return redirect()->back();
    }

    public function delete_delivery(Request $request, $fee_id) {
    	$this->CheckLogin();
    	FeeShip::where('fee_id', $fee_id)->delete();
    	Session::put('message', 'Đã xoá phí vận chuyển thành công');
    	return redirect()->back();
    }
}
