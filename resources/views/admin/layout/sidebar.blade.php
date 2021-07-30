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
                <div>@if (Auth::guest())
                    @else
                    <div class="fw-bold text-capitalize"> {{ Auth::user()->name }}</div>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="text-muted">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    @endif
                </div>
            </div>
        </div>
        <ul class="menu-sidebar">
            <li class="menu-divider">Menu</li>
            <li class="">
                <a class="active" href="{{URL::to('/dashboard')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Tổng Quan</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/orders')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Đơn Hàng</span>
                </a>
            </li>
            <li>
                <a href="{{URL::to('/all-product-list')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-box"></i>
                    </span>
                    <span>Sản Phẩm</span>
                </a>
                <ul>
                    <li>
                        <a  href="{{URL::to('/add-new-product')}}">Thêm sản phẩm</a>
                    </li>
                    <li>
                        <a  href="{{URL::to('/all-product-list')}}">Danh sách sản phẩm</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{URL::to('/category-list')}}">
                    <span class="nav-link-icon">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <span>Danh Mục Sản Phẩm</span>
                </a>
                <ul>
                    <li>
                        <a  href="{{URL::to('/add-category-product')}}">Thêm danh mục sản phẩm</a>
                    </li>
                    <li>
                        <a  href="{{URL::to('/all-category-product')}}">Danh sách danh mục</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{URL::to('/brand-list')}}">
                    <span class="nav-link-icon">
                        <i class="fal fa-bookmark"></i>
                    </span>
                    <span>Thương Hiệu</span>
                </a>
                <ul>
                    <li>
                        <a  href="{{URL::to('/add-brand-product')}}">Thêm thương hiệu</a>
                    </li>
                    <li>
                        <a  href="{{URL::to('/all-brand-product')}}">Danh sách thương hiệu</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>