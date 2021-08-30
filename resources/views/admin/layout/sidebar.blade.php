@php 
    $admin_id = Session::get('admin_id');
    $admin_name = Session::get('admin_name');
@endphp
<div class="menu">
    <div class="menu-header">
        <a href="{{URL::to('/dashboard')}}" class="menu-header-logo">
            <img src="{{asset('public/backend/images/logo.png')}}" alt="logo">
        </a>
        <a href="{{URL::to('/dashboard')}}" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <div class="d-flex align-items-center">
                <div class="avatar me-3">
                    <img src="{{asset('public/backend/images/avatar.jpg')}}"class="rounded-circle" alt="image">
                </div>
                <div>
                    @if (!$admin_id)
                    @else
                    <div class="fw-bold text-capitalize"> {{ $admin_name }}</div>
                    <span class="text-success">Online</span>
                    @endif
                </div>
            </div>
        </div>
        <ul class="menu-sidebar">
            <li class="menu-divider">Menu</li>
            <li class="">
                <a href="{{URL::to('/dashboard')}}"  class="{{ Request::path() == 'dashboard' ? ' active ' : '' }}">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Tổng Quan</span>
                </a>
            </li>
            <li>
                <a href="#" class="">
                    <span class="nav-link-icon">
                        <i class="fal fa-images"></i>
                    </span>
                    <span>Slider Gallery</span>
                </a>
                <ul>
                    <li>
                        <a  href="{{URL::to('/add-slider')}}"  class="{{ Request::path() == 'add-slider' ? ' active ' : '' }}">Thêm slider</a>
                    </li>
                    <li>
                        <a  href="{{URL::to('/all-slider')}}"  class="{{ Request::path() == 'all-slider' ? ' active ' : '' }}">Danh sách slider</a>
                    </li>
                </ul>
            </li>
             <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="fal fa-badge-percent"></i>
                    </span>
                    <span>Mã giảm giá</span>
                </a>
                <ul>
                    <li>
                        <a  href="{{URL::to('/add-coupon')}}"  class="{{ Request::path() == 'add-coupon' ? ' active ' : '' }}">Thêm mã giảm giá</a>
                    </li>
                    <li>
                        <a  href="{{URL::to('/all-coupon')}}"  class="{{ Request::path() == 'all-coupon' ? ' active ' : '' }}">Danh sách mã giảm giá</a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="{{URL::to('/orders')}}" class="{{ Request::path() == 'orders' ? ' active ' : '' }}">
                    <span class="nav-link-icon">
                        <i class="fal fa-clipboard-list"></i>
                    </span>
                    <span>Đơn Hàng </span>
                </a>
            </li>
            <li>
                <a href="#" class="">
                    <span class="nav-link-icon">
                        <i class="fal fa-tshirt"></i>
                    </span>
                    <span>Sản Phẩm</span>
                </a>
                <ul>
                    <li>
                        <a  href="{{URL::to('/add-new-product')}}"  class="{{ Request::path() == 'add-new-product' ? ' active ' : '' }}">Thêm sản phẩm</a>
                    </li>
                    <li>
                        <a  href="{{URL::to('/all-product-list')}}" class="{{ Request::path() == 'all-product-list' ? ' active ' : '' }}">Danh sách sản phẩm</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <span>Danh Mục Sản Phẩm</span>
                </a>
                <ul>
                    <li>
                        <a  href="{{URL::to('/add-category-product')}}" class="{{ Request::path() == 'add-category-product' ? ' active ' : '' }}">Thêm danh mục sản phẩm</a>
                    </li>
                    <li>
                        <a  href="{{URL::to('/all-category-product')}}" class="{{ Request::path() == 'all-category-product' ? ' active ' : '' }}">Danh sách danh mục</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="fal fa-bookmark"></i>
                    </span>
                    <span>Thương Hiệu</span>
                </a>
                <ul>
                    <li>
                        <a  href="{{URL::to('/add-brand-product')}}" class="{{ Request::path() == 'add-brand-product' ? ' active ' : '' }}">Thêm thương hiệu</a>
                    </li>
                    <li>
                        <a  href="{{URL::to('/all-brand-product')}}" class="{{ Request::path() == 'all-brand-product' ? ' active ' : '' }}">Danh sách thương hiệu</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="fal fa-truck"></i>
                    </span>
                    <span>Quản lý vận chuyển</span>
                </a>
                <ul>
                    <li>
                        <a  href="{{URL::to('/add-delivery')}}" class="{{ Request::path() == 'add-delivery' ? ' active ' : '' }}">Thêm phí vận chuyển</a>
                    </li>
                    <li>
                        <a  href="{{URL::to('/all-delivery')}}" class="{{ Request::path() == 'all-delivery' ? ' active ' : '' }}">Danh sách phí vận chuyển</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{URL::to('/customer-list')}}" class="{{ Request::path() == 'customer-list' ? ' active ' : '' }}">
                    <span class="nav-link-icon">
                        <i class="fal fa-users"></i>
                    </span>
                    <span>Quản lý thành viên</span>
                </a>
            </li>
        </ul>
    </div>
</div>