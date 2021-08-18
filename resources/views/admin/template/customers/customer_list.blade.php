@extends('admin.dashboard')
@section('title', 'Quản lý thành viên')
@section('title-page', 'Danh sách thành viên')
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
                <li class="breadcrumb-item active" aria-current="page">Danh sách thành viên</li>
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
    @if($customers_list->count())
    <div class="table-responsive">
        <table class="table table-custom table-lg mb-0" id="orders">
            <thead>
                <tr>
                    <th>
                        <input class="form-check-input select-all" type="checkbox" data-select-all-target="#orders"
                        id="defaultCheck1">
                    </th>
                    <th>Tên thành viên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Tình trạng</th>
                    <th class="text-end"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers_list as $val)
                <tr>
                    <td>
                        <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                        {{$val->customer_name}}
                    </td>
                    <td>{{$val->customer_email}}</td>
                    <td>{{$val->customer_phone}}</td>
                    <td>
                        <span class="badge bg-success">Mới</span>
                    </td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a data-id="{{$val->customer_id}}" data-action="{{URL::to('customers/delete-customer/'. $val->customer_id)}}" class="dropdown-item delete-product">Xoá thành viên</a>
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
        {{$customers_list->links()}}
    </div>
    @else
    <div class="pd-5 empty-product">
        <i class="fal fa-user"></i>
        <p>Chưa có thành viên nào đăng ký</p>
    </div>
    @endif

</div>
<!-- ./ content -->
@endsection
