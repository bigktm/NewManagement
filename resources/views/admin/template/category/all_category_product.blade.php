@extends('admin.dashboard')
@section('title', 'Thêm danh mục sản phẩm')
@section('title-page', 'Thêm danh mục sản phẩm')
@section('content')
<!-- content -->
<div class="content ">
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{URL::to('dashboard')}}">
                        <i class="bi bi-globe2 small me-2"></i> Tổng quan
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Danh mục sản phẩm</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?php
            $message = Session::get('message');
            if($message){
                echo '<div class="alert alert-success mt-4"><span class="text-alert">'.$message.'</span></div>';
                Session::put('message',null);
            }
            ?>
            <div class="d-md-flex gap-4 mb-4 align-items-center">
                <div class="dropdown ms-auto">
                    <a href="{{URL::to('/add-category-product')}}" class="btn btn-primary btn-icon">
                        <i class="bi bi-plus-circle"></i> Thêm danh mục
                    </a>
                </div>
            </div>
            @if($all_category_product->count())
            <div class="table-responsive">
                <table class="table table-custom table-lg mb-0" id="datatable-search">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục sản phẩm</th>
                            <th>Thuộc danh mục</th>
                            <th>Trạng thái</th>
                            <th>Mô tả</th>
                            <th>Từ khoá</th>
                            <th>Ngày thêm</th>
                            <th class="text-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all_category_product as $key => $cat_pro)
                        <tr>
                            <td>
                                <a href="#">{{$cat_pro->category_id}}</a>
                            </td>
                            <td>{{$cat_pro->category_name}}</td>
                            <td>
                                @if($cat_pro->category_parent==0)
                                    <span style="color:orange;">Danh mục gốc</span>
                                @else
                                    @foreach($all_category_product as $key => $cate_sub_pro)
                                        @if($cate_sub_pro->category_id==$cat_pro->category_parent)
                                            <span style="color:green;">{{$cate_sub_pro->category_name}}</span>
                                        @endif
                                    @endforeach 
                                @endif
                            </td>
                            <td>
                                @if($cat_pro->category_status == '0')
                                <a href="{{URL::to('/active-category-product/'. $cat_pro->category_id)}}" data-bs-toggle="tooltip" title="Hiển thị danh mục"><span class="bg-danger text-white span-stt">Ẩn</span></a>
                                @else
                                <a href="{{URL::to('/inactive-category-product/'. $cat_pro->category_id)}}"><span class="bg-success text-white span-stt" data-bs-toggle="tooltip" title="Ẩn danh mục">Hiện thị</span></a>
                                @endif
                            </td>
                            <td>{{$cat_pro->category_desc}}</td>
                            <td>{{$cat_pro->category_keywords}}</td>
                            <td>{{$cat_pro->created_at}}</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{URL::to('/edit-category-product/'.$cat_pro->category_id)}}" class="dropdown-item">Sửa Danh Mục</a>
                                            <a data-id="{{$cat_pro->category_id}}" data-action="{{URL::to('/delete-category-product/'.$cat_pro->category_id)}}" class="dropdown-item delete-item">Xoá Danh Mục</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
            {{-- <div class="navigation-end" >
                {{$all_category_product->links()}}
            </div> --}}
            @else
            <div class="pd-5 empty-product">
                <i class="bi bi-wallet2"></i>
                <p>Chưa có danh mục sản phẩm nào</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
