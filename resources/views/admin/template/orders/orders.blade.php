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
                        <i class="bi bi-bar-chart small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Orders</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-md-flex gap-4 align-items-center">
                <div class="d-none d-md-flex">All Orders</div>
                <div class="d-md-flex gap-4 align-items-center">
                    <form class="mb-3 mb-md-0">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option>Sort by</option>
                                    <option value="desc">Desc</option>
                                    <option value="asc">Asc</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button class="btn btn-outline-light" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                <tr>
                    <td>
                        <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                        <a href="#">#3210</a>
                    </td>
                    <td>Cortie Gemson</td>
                    <td>May 23, 2021</td>
                    <td>$239,00</td>
                    <td>
                        <span class="badge bg-primary">Processing</span>
                    </td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Show</a>
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Edit</a>
                                    <a href="#" class="dropdown-item">Delete</a>
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
                        <a href="#">#3210</a>
                    </td>
                    <td>Mathilde Tumilson</td>
                    <td>May 15, 2021</td>
                    <td>$650,50</td>
                    <td>
                        <span class="badge bg-dark">Shipped</span>
                    </td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Show</a>
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Edit</a>
                                    <a href="#" class="dropdown-item">Delete</a>
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
                        <a href="#">#3210</a>
                    </td>
                    <td>Audrye Heaford</td>
                    <td>Apr 24, 2021</td>
                    <td>$100,00</td>
                    <td>
                        <span class="badge bg-success">Completed</span>
                    </td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Show</a>
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Edit</a>
                                    <a href="#" class="dropdown-item">Delete</a>
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
                        <a href="#">#3210</a>
                    </td>
                    <td>Brantley Mell</td>
                    <td>Apr 10, 2021</td>
                    <td>$19</td>
                    <td>
                        <span class="badge bg-warning">Refunded</span>
                    </td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Show</a>
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Edit</a>
                                    <a href="#" class="dropdown-item">Delete</a>
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
                        <a href="#">#3210</a>
                    </td>
                    <td>Dominique Enriques</td>
                    <td>March 5, 2021</td>
                    <td>$150,00</td>
                    <td>
                        <span class="badge bg-danger">Cancelled</span>
                    </td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Show</a>
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Edit</a>
                                    <a href="#" class="dropdown-item">Delete</a>
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
                        <a href="#">#3210</a>
                    </td>
                    <td>Cortie Gemson</td>
                    <td>May 23, 2021</td>
                    <td>$239,00</td>
                    <td>
                        <span class="badge bg-primary">Processing</span>
                    </td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Show</a>
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Edit</a>
                                    <a href="#" class="dropdown-item">Delete</a>
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
                        <a href="#">#3210</a>
                    </td>
                    <td>Mathilde Tumilson</td>
                    <td>May 15, 2021</td>
                    <td>$650,50</td>
                    <td>
                        <span class="badge bg-dark">Shipped</span>
                    </td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Show</a>
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Edit</a>
                                    <a href="#" class="dropdown-item">Delete</a>
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
                        <a href="#">#3210</a>
                    </td>
                    <td>Audrye Heaford</td>
                    <td>Apr 24, 2021</td>
                    <td>$100,00</td>
                    <td>
                        <span class="badge bg-success">Completed</span>
                    </td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Show</a>
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Edit</a>
                                    <a href="#" class="dropdown-item">Delete</a>
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
                        <a href="#">#3210</a>
                    </td>
                    <td>Brantley Mell</td>
                    <td>Apr 10, 2021</td>
                    <td>$19</td>
                    <td>
                        <span class="badge bg-warning">Refunded</span>
                    </td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Show</a>
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Edit</a>
                                    <a href="#" class="dropdown-item">Delete</a>
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
                        <a href="#">#3210</a>
                    </td>
                    <td>Dominique Enriques</td>
                    <td>March 5, 2021</td>
                    <td>$150,00</td>
                    <td>
                        <span class="badge bg-danger">Cancelled</span>
                    </td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Show</a>
                                    <a href="{{URL::to('/orders/order-detail')}}" class="dropdown-item">Edit</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    

</div>
<!-- ./ content -->
@endsection
