@extends('admin.dashboard')
@section('title', 'Danh sách thương hiệu sản phẩm')
@section('title-page', 'Danh sách thương hiệu sản phẩm')
@section('content')
<!-- content -->
<div class="content ">
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="bi bi-globe2 small me-2"></i> Tổng quan
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách thương hiệu</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex gap-4 align-items-center">
                        @if($all_delivery->count())
                        <div class="d-none d-md-flex">Tất cả phí vận chuyển</div>
                        @endif
                        <div class="dropdown ms-auto">
                            <a href="{{URL::to('/add-delivery')}}" class="btn btn-primary btn-icon">
                                <i class="bi bi-plus-circle"></i> Thêm phí vận chuyển
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @if($all_delivery->count())
            <div class="table-responsive">
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<div class="alert alert-success mt-4"><span class="text-alert">'.$message.'</span></div>';
                    Session::put('message',null);
                }
                ?>
                <table class="table table-custom table-lg mb-0" id="products">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tỉnh/ Thành Phố</th>
                            <th>Quận/Huyện</th>
                            <th>Xã/Phường/Thị Trấn</th>
                            <th>Phí Ship</th>
                            <th class="text-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all_delivery as $key => $val)
                        <tr>
                            <td>{{$val->fee_id}}</td>
                            <td>{{$val->name_city}}</td>
                            <td>{{$val->name_quanhuyen}}</td>
                            <td>{{$val->name_xaphuong}}</td>
                            <td>
                                <span class="edit_feeship" data-bs-toggle="tooltip" data-bs-placement="top" title="Click để sửa phí vận chuyển">{{number_format($val->fee_feeship)}} đ</span>
                                <form class="update_feeship" method="POST" action="{{url('/update-feeship/'.$val->fee_id)}}" >
                                    {{ csrf_field() }}
                                    <input type="text" value="{{$val->fee_feeship}}" class="form-control" style="width: 150px" name="fee_feeship">
                                    <input type="submit" hidden />
                                </form>
                            </td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a data-id="{{$val->fee_id}}" data-action="{{URL::to('/delete-delivery/'.$val->fee_id)}}" class="dropdown-item delete-item">Xoá Phí Vận Chuyển</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
            <div class="navigation-end" >
                {{$all_delivery->links()}}
            </div>
            @else
            <div class="pd-5 empty-product">
                <i class="fal fa-bookmark"></i>
                <p>Chưa có thương hiệu nào</p>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- ./ content -->
@endsection
