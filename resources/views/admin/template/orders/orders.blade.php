@extends('admin.dashboard')
@section('title', 'Đơn Hàng')
@section('title-page', 'Đơn Hàng')
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
                <li class="breadcrumb-item active" aria-current="page">Đơn đặt hàng</li>
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
    @if($order_all->count())
    <div class="table-responsive">
        <table class="table table-custom table-lg mb-0" id="orders">
            <thead>
                <tr>
                    <th>
                        <input class="form-check-input select-all" type="checkbox" data-select-all-target="#orders"
                        id="defaultCheck1">
                    </th>
                    <th>ID</th>
                    <th>Người đặt</th>
                    <th>Ngày đặt</th>
                    <th>Tổng tiền</th>
                    <th>Tình trạng</th>
                    <th class="text-end"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($order_all as $item)
                <tr>
                    <td>
                        <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                        <a href="{{URL::to('/orders/view-order-detail/'.$item->order_id)}}" style="text-transform: uppercase;">#{{$item->order_code}}</a>
                    </td>
                    <td>{{$item->customer_name}}</td>
                    <td>{{$item->order_date}}</td>
                    <td>{{number_format($item->order_total)}}  ₫</td>
                    <td>
                        @if($item->order_status == 0)
                            <span class="badge bg-info">Đang chờ xử lý</span>
                        @elseif($item->order_status == 1)
                            <span class="badge bg-warning">Đang giao hàng</span>
                        @elseif($item->order_status == 2)
                            <span class="badge bg-success">Đã hoàn thành</span>
                        @else
                            <span class="badge bg-danger">Đã bị huỷ</span>
                        @endif
                    </td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{URL::to('/orders/view-order-detail/'.$item->order_id)}}" class="dropdown-item">Xem đơn hàng</a>
                                    <a href="{{URL::to('/orders/edit-order-detail/'.$item->order_id)}}" class="dropdown-item">Sửa đơn hàng</a>
                                    <a data-id="{{$item->order_id}}" data-action="{{URL::to('/delete-order/'.$item->order_id)}}" class="dropdown-item delete-product">Xoá đơn hàng</a>
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
        {{$order_all->links()}}
    </div>
    @else
    <div class="pd-5 empty-product">
        <i class="fal fa-clipboard-list"></i>
        <p>Chưa có đơn hàng nào</p>
    </div>
    @endif

</div>
<!-- ./ content -->
@endsection
