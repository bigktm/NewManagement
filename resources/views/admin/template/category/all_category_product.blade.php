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
                    <a href="#">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">All Category</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex gap-4 align-items-center">
                        <div class="d-none d-md-flex">Tất cả danh mục sản phẩm</div>
                        <div class="dropdown ms-auto">
                            <a href="{{URL::to('/add-category-product')}}" class="btn btn-primary btn-icon">
                                <i class="bi bi-plus-circle"></i> Thêm danh mục
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-custom table-lg mb-0" id="products">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục sản phẩm</th>
                            <th>Hiển thị</th>
                            <th>Ngày thêm</th>
                            <th class="text-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#">#1</a>
                            </td>
                            <td>Áo Polo</td>
                            <td>Hiển thị</td>
                            <td>02/03/2021</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Sửa</a>
                                            <a href="#" class="dropdown-item">Xoá</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">#2</a>
                            </td>
                            <td>Áo Thun</td>
                            <td>Hiển thị</td>
                            <td>02/03/2021</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Sửa</a>
                                            <a href="#" class="dropdown-item">Xoá</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">#3</a>
                            </td>
                            <td>Áo Sơ Mi</td>
                            <td>Hiển thị</td>
                            <td>02/03/2021</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Sửa</a>
                                            <a href="#" class="dropdown-item">Xoá</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">#5</a>
                            </td>
                            <td>Quần Jeans</td>
                            <td>Hiển thị</td>
                            <td>02/03/2021</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Sửa</a>
                                            <a href="#" class="dropdown-item">Xoá</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">#6</a>
                            </td>
                            <td>Suit</td>
                            <td>Hiển thị</td>
                            <td>02/03/2021</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Sửa</a>
                                            <a href="#" class="dropdown-item">Xoá</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav class="mt-4" aria-label="Page navigation example" style="display: none;">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- ./ content -->
@endsection
