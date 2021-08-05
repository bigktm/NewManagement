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
                        <div class="d-none d-md-flex">Tất cả thương hiệu sản phẩm</div>
                        <div class="dropdown ms-auto">
                            <a href="{{URL::to('/add-brand-product')}}" class="btn btn-primary btn-icon">
                                <i class="bi bi-plus-circle"></i> Thêm thương hiệu
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
                            <th>Tên thương hiệu sản phẩm</th>
                            <th>Logo</th>
                            <th>Trạng thái</th>
                            <th>Mô tả</th>
                            <th>Ngày thêm</th>
                            <th class="text-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all_brand_product as $key => $brand_pro)
                        <tr>
                            <td>
                                <a href="#">{{$brand_pro->brand_id}}</a>
                            </td>
                            <td>{{$brand_pro->brand_name}}</td>
                            <td>
                                @if($brand_pro->brand_logo)
                                <img src="{{asset('public/uploads/brands/'. $brand_pro->brand_logo)}}" class="rounded" width="80">
                                @else
                                <img src="{{asset('public/uploads/brands/default-image.jpg')}}" class="rounded" width="80">
                                @endif
                            </td>
                            <td>
                                @if($brand_pro->brand_status == '0')
                                <a href="{{URL::to('/active-brand-product/'. $brand_pro->brand_id)}}" data-bs-toggle="tooltip" title="Hiển thị danh mục"><span class="bg-danger text-white span-stt">Ẩn</span></a>
                                @else
                                <a href="{{URL::to('/inactive-brand-product/'. $brand_pro->brand_id)}}"><span class="bg-success text-white span-stt" data-bs-toggle="tooltip" title="Ẩn danh mục">Hiện thị</span></a>
                                @endif
                            </td>
                            <td>{{ Illuminate\Support\Str::limit($brand_pro->brand_desc, 50) }}</td>
                            <td >{{$brand_pro->created_at}}</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{URL::to('/edit-brand-product/'.$brand_pro->brand_id)}}" class="dropdown-item">Sửa Thương Hiệu</a>
                                            <a data-id="{{$brand_pro->brand_id}}" data-action="{{URL::to('/delete-brand-product/'.$brand_pro->brand_id)}}" class="dropdown-item delete-product">Xoá Thương Hiệu</a>
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
                {{$all_brand_product->links()}}
            </div>
        </div>
    </div>
</div>
<!-- ./ content -->
@endsection
