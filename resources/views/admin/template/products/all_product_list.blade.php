@extends('admin.dashboard')
@section('title', 'Sản phẩm')
@section('title-page', 'Tất cả sản phẩm')
@section('content')
<!-- content -->
<div class="content ">

    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?php
            $message = Session::get('message');
            if($message){
                echo '<div class="alert alert-success"><span class="text-alert">'.$message.'</span></div>';
                Session::put('message',null);
            }
            ?>
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex gap-4 align-items-center">
                        <div class="d-none d-md-flex">Tất cả sản phẩm</div>
                        <div class="d-md-flex gap-4 align-items-center">
                            <form class="mb-3 mb-md-0">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <select class="form-select">
                                            <option>Sắp Xếp</option>
                                            <option value="desc">Danh Mục</option>
                                            <option value="asc">Thương Hiệu</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="dropdown ms-auto">
                            <a href="{{URL::to('/add-new-product')}}" class="btn btn-primary btn-icon">
                                <i class="bi bi-plus-circle"></i> Thêm sản phẩm mới
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-custom table-lg mb-0" id="products">
                    <thead>
                        <tr>
                            <th>
                                <input class="form-check-input select-all" type="checkbox"
                                data-select-all-target="#products" id="defaultCheck1">
                            </th>
                            <th>ID</th>
                            <th>Hình ảnh</th>
                            <th>Thư viện hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Thương hiệu</th>
                            <th>Mã sản phẩm</th>
                            <th>Tình trạng</th>
                            <th>Giá</th>
                            <th class="text-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all_product as $key => $product)
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>
                                {{$product->product_id}}
                            </td>
                            <td>
                                <img src="{{asset('public/uploads/products/'.$product->product_image)}}" class="rounded" width="40"
                                alt="...">
                            </td>
                            <td><a href="#">Thêm thư viện ảnh</a></td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->category_name}}</td>
                            <td>{{$product->brand_name}}</td>
                            <td>{{$product->product_sku}}</td>
                            <td>
                                @if($product->product_status == '0')
                                <span class="text-warning">Hết hàng</span>
                                @else
                                <span class="text-success">Còn hàng</span>
                                @endif
                            </td>
                            <td>{{ number_format($product->product_price,0,',','.') }}đ</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{URL::to('/edit-product/'.$product->product_id)}}" class="dropdown-item">Sửa sản phẩm</a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteCategoryConfirm" class="dropdown-item">Xoá sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- ./ content -->
<div class="modal fade" id="deleteCategoryConfirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action="{{URL::to('/delete-product/'. $product->product_id)}}" method="post">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="text-center pd-3">
                        <p>Bạn có muốn xoá sản phẩm này không?</p>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Huỷ</button>
                    <button type="submit" class="btn btn-primary">Xoá sản phẩm</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
