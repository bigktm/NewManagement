@extends('admin.dashboard')
@section('title', 'Danh sách mã giảm giá')
@section('title-page', 'Danh sách mã giảm giá')
@section('content')
<!-- content -->
<div class="content ">

    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="bi bi-bar-chart small me-2"></i> Tổng quan
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách mã giảm giá</li>
            </ol>
        </nav>
    </div>
    <?php
    $message = Session::get('message');
    if($message){
        echo '<div class="alert alert-success"><span class="text-alert">'.$message.'</span></div>';
        Session::put('message',null);
    }
    ?>
    @if($all_coupon->count())
    <div class="table-responsive">
        <table class="table table-custom table-lg mb-0" id="orders">
            <thead>
                <tr>
                    <th>
                        <input class="form-check-input select-all" type="checkbox" data-select-all-target="#orders"
                        id="defaultCheck1">
                    </th>
                    <th>Mã giảm giá</th>
                    <th>Loại giảm giá</th>
                    <th>Giảm giá tiền</th>
                    <th class="text-end"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($all_coupon as $item)
                <tr>
                    <td>
                        <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                        {{$item->coupon_code}}
                    </td>
                    <td>
                        @if($item->coupon_type == 1)
                            <span class="badge bg-info">Giảm giá giỏ hàng</span>
                        @elseif($item->coupon_type == 2)
                            <span class="badge bg-success">Phần trăm chiết khấu</span>
                        @endif
                    </td>
                    <td>
                        @if($item->coupon_type == 1)
                            {{number_format($item->coupon_price)}} ₫
                        @elseif($item->coupon_type == 2)
                            {{$item->coupon_price}} %
                        @endif
                    </td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{URL::to('/edit-coupon/'.$item->coupon_id)}}" class="dropdown-item">Sửa mã giảm giá</a>
                                    <a data-id="{{$item->coupon_id}}" data-action="{{URL::to('/delete-coupon/'.$item->coupon_id)}}" class="dropdown-item delete-product">Xoá mã giảm giá</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="navigation-end">
        {{$all_coupon->links()}}
    </div>
    @else
    <div class="pd-5 empty-product">
        <i class="fal fa-clipboard-list"></i>
        <p>Chưa có mã giảm giá nào</p>
    </div>
    @endif

</div>
<!-- ./ content -->
@endsection
