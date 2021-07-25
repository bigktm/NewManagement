@extends('admin.dashboard')
@section('title', 'Đăng sản phẩm mới')
@section('title-page', 'Đăng sản phẩm mới')
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
                <li class="breadcrumb-item" aria-current="page"><a href="#">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">
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
                            <a href="{{URL::to('/product/add')}}" class="btn btn-primary btn-icon">
                                <i class="bi bi-plus-circle"></i> Add Product
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
                            <th>Tên sản phẩm</th>
                            <th>Tình trạng</th>
                            <th>Giá</th>
                            <th>Ngày tạo</th>
                            <th class="text-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>
                                <a href="#">#1</a>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="{{asset('public/backend/images/1.png')}}" class="rounded" width="40"
                                    alt="...">
                                </a>
                            </td>
                            <td>Áo thun cổ tròn</td>
                            <td>
                                <span class="text-success">Còn hàng</span>
                            </td>
                            <td>$499,90</td>
                            <td>02/03/2021</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Sửa sản phẩm</a>
                                            <a href="#" class="dropdown-item">Xoá sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>
                                <a href="#">#2</a>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="{{asset('public/backend/images/2.png')}}" class="rounded" width="40"
                                    alt="...">
                                </a>
                            </td>
                            <td>Áo thun cổ tròn</td>
                            <td>
                                <span class="text-success">Còn hàng</span>
                            </td>
                            <td>$499,90</td>
                            <td>02/03/2021</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Sửa sản phẩm</a>
                                            <a href="#" class="dropdown-item">Xoá sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>
                                <a href="#">#3</a>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="{{asset('public/backend/images/3.png')}}" class="rounded" width="40"
                                    alt="...">
                                </a>
                            </td>
                            <td>Áo thun cổ tròn</td>
                            <td>
                                <span class="text-success">Còn hàng</span>
                            </td>
                            <td>$499,90</td>
                            <td>02/03/2021</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Sửa sản phẩm</a>
                                            <a href="#" class="dropdown-item">Xoá sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>
                                <a href="#">#4</a>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="{{asset('public/backend/images/5.png')}}" class="rounded" width="40"
                                    alt="...">
                                </a>
                            </td>
                            <td>Áo thun cổ tròn</td>
                            <td>
                                <span class="text-success">Còn hàng</span>
                            </td>
                            <td>$499,90</td>
                            <td>02/03/2021</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Sửa sản phẩm</a>
                                            <a href="#" class="dropdown-item">Xoá sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>
                                <a href="#">#5</a>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="{{asset('public/backend/images/1.png')}}" class="rounded" width="40"
                                    alt="...">
                                </a>
                            </td>
                            <td>Áo thun cổ tròn</td>
                            <td>
                                <span class="text-success">Còn hàng</span>
                            </td>
                            <td>$499,90</td>
                            <td>02/03/2021</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Sửa sản phẩm</a>
                                            <a href="#" class="dropdown-item">Xoá sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>
                                <a href="#">#6</a>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="{{asset('public/backend/images/2.png')}}" class="rounded" width="40"
                                    alt="...">
                                </a>
                            </td>
                            <td>Áo thun cổ tròn</td>
                            <td>
                                <span class="text-success">Còn hàng</span>
                            </td>
                            <td>$499,90</td>
                            <td>02/03/2021</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Sửa sản phẩm</a>
                                            <a href="#" class="dropdown-item">Xoá sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>
                                <a href="#">#7</a>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="{{asset('public/backend/images/3.png')}}" class="rounded" width="40"
                                    alt="...">
                                </a>
                            </td>
                            <td>Áo thun cổ tròn</td>
                            <td>
                                <span class="text-success">Còn hàng</span>
                            </td>
                            <td>$499,90</td>
                            <td>02/03/2021</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Sửa sản phẩm</a>
                                            <a href="#" class="dropdown-item">Xoá sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>
                                <a href="#">#8</a>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="{{asset('public/backend/images/5.png')}}" class="rounded" width="40"
                                    alt="...">
                                </a>
                            </td>
                            <td>Áo thun cổ tròn</td>
                            <td>
                                <span class="text-success">Còn hàng</span>
                            </td>
                            <td>$499,90</td>
                            <td>02/03/2021</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Sửa sản phẩm</a>
                                            <a href="#" class="dropdown-item">Xoá sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>
                                <a href="#">#9</a>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="{{asset('public/backend/images/2.png')}}" class="rounded" width="40"
                                    alt="...">
                                </a>
                            </td>
                            <td>Áo thun cổ tròn</td>
                            <td>
                                <span class="text-success">Còn hàng</span>
                            </td>
                            <td>$499,90</td>
                            <td>02/03/2021</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Sửa sản phẩm</a>
                                            <a href="#" class="dropdown-item">Xoá sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox">
                            </td>
                            <td>
                                <a href="#">#10</a>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="{{asset('public/backend/images/3.png')}}" class="rounded" width="40"
                                    alt="...">
                                </a>
                            </td>
                            <td>Áo thun cổ tròn</td>
                            <td>
                                <span class="text-success">Còn hàng</span>
                            </td>
                            <td>$499,90</td>
                            <td>02/03/2021</td>
                            <td class="text-end">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-three-dots"></i> </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">Sửa sản phẩm</a>
                                            <a href="#" class="dropdown-item">Xoá sản phẩm</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav class="mt-4" aria-label="Page navigation example">
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
