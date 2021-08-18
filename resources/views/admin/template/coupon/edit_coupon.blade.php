@extends('admin.dashboard')
@section('title', 'Thêm mã giảm giá')
@section('title-page', 'Thêm mã giảm giá')
@section('content')
<!-- content -->
<div class="content ">
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{URL::to('/dashboard')}}">
                        <i class="bi bi-globe2 small me-2"></i> Tổng quan
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Thêm mã giảm giá</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel-body mb-4">
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<div class="alert alert-success"><span class="text-alert">'.$message.'</span></div>';
                    Session::put('message',null);
                }
                ?>
                @foreach($coupon_data as $val)
                <div class="position-center col-md-12">
                    <form role="form " class="row" action="{{URL::to('/update-coupon/'.$val->coupon_id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group  col-md-6">
                            <label>Mã giảm giá</label>
                            <input type="text"  class="form-control" name="coupon_code" value="{{$val->coupon_code}}" placeholder="Mã giảm giá" >
                        </div>
                        <div class="form-group  col-md-6">
                            <label>Loại giảm giá</label>
                            <select name="coupon_type" class="form-control input-sm m-bot15">
                                <option value="1" {{ $val->coupon_type == $val->coupon_type ? ' selected ' : '' }}>Giảm giá giỏ hàng</option>
                                <option value="2" {{ $val->coupon_type == $val->coupon_type ? ' selected ' : '' }}>Phần trăm chiết khấu</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Mô tả</label>
                            <textarea style="resize: none" rows="3" class="form-control" name="coupon_desc" placeholder="Mô tả">{{$val->coupon_desc}}</textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Số tiền chiết khấu</label>
                            <input type="text" class="form-control" value="{{$val->coupon_price}}" name="coupon_price" placeholder="Chiết khấu" >
                        </div>
                        <div class="form-group relative col-md-6">
                            <label>Thời gian hết hạn</label>
                            <input type="text" name="coupon_expiry" value="{{$val->coupon_expiry}}" class="form-control date_coupon">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Hiển thị</label>
                            <select name="coupon_status" class="form-control input-sm m-bot15">
                                <option value="0" {{ $val->coupon_status == $val->coupon_status ? ' selected ' : '' }}>Ẩn</option>
                                <option value="1" {{ $val->coupon_status == $val->coupon_status ? ' selected ' : '' }}>Hiển thị</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 flex-end d-flex">
                            <button type="submit" name="add_brand_product mt-3" class="btn btn-primary">Cập nhật mã giảm giá</button>
                        </div>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- ./ content -->
@endsection
