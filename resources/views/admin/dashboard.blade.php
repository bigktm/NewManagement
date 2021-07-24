<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta property="og:url" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/public/backend/images/favicon.png')}}">

    <title>@yield('title')</title>

    <!-- Styles -->
    @include('admin.layout.css_file')
</head>
<body>
    <!-- preloader -->
    <div class="preloader">
        <img src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
        <div class="preloader-icon"></div>
    </div>
    <!-- ./ preloader -->
    <!-- menu -->
    <div class="menu">
        <div class="menu-header">
            <a href="index.html" class="menu-header-logo">
                <img src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
            </a>
            <a href="index.html" class="btn btn-sm menu-close-btn">
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
            <ul>
                <li class="menu-divider">Menu</li>
                <li>
                    <a  class="active"
                    href="index.html">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Tổng Quan</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Đơn Hàng</span>
                </a>
                <ul>
                    <li>
                        <a  href="#">List</a>
                    </li>
                    <li>
                        <a  href="#">Detail</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-box"></i>
                    </span>
                    <span>Sản Phẩm</span>
                </a>
                <ul>
                    <li>
                        <a  href="product-list.html">Thêm sản phẩm</a>
                    </li>
                    <li>
                        <a  href="product-grid.html">Danh sách sản phẩm</a>
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
                        <a  href="product-list.html">Thêm danh mục sản phẩm</a>
                    </li>
                    <li>
                        <a  href="product-grid.html">Danh sách danh mục</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-wallet2"></i>
                    </span>
                    <span>Thương Hiệu</span>
                </a>
                <ul>
                    <li>
                        <a  href="product-list.html">Thêm thương hiệu</a>
                    </li>
                    <li>
                        <a  href="product-grid.html">Danh sách thương hiệu</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- ./  menu -->

<!-- layout-wrapper -->
<div class="layout-wrapper">

    <!-- header -->
    <div class="header">
        <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
            <a href="#">
                <i class="bi bi-list"></i>
            </a>
        </div>
        <!-- Logo -->
        <a href="index.html" class="logo">
            <img width="100" src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
        </a>
        <!-- ./ Logo -->
        <div class="page-title">Overview</div>
        <form class="search-form">
            <div class="input-group">
                <button class="btn btn-outline-light" type="button" id="button-addon1">
                    <i class="bi bi-search"></i>
                </button>
                <input type="text" class="form-control" placeholder="Search..."
                aria-label="Example text with button addon" aria-describedby="button-addon1">
                <a href="#" class="btn btn-outline-light close-header-search-bar">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </form>
        <div class="header-bar ms-auto">
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
                        <i class="bi bi-bell icon-lg"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link nav-link-notify" data-count="3" data-bs-toggle="dropdown">
                        <i class="bi bi-cart2 icon-lg"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                        <h6 class="m-0 px-4 py-3 border-bottom">Shopping Cart</h6>
                        <div class="dropdown-menu-body">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex align-items-center">
                                    <a href="#" class="text-danger me-3" title="Remove">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <a href="#" class="me-3 flex-shrink-0 ">
                                        <img src="../../assets/images/products/3.jpg" class="rounded" width="60"
                                        alt="...">
                                    </a>
                                    <div>
                                        <h6>Digital clock</h6>
                                        <div>1 x $1.190,90</div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex align-items-center">
                                    <a href="#" class="text-danger me-3" title="Remove">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <a href="#" class="me-3 flex-shrink-0 ">
                                        <img src="../../assets/images/products/4.jpg" class="rounded" width="60"
                                        alt="...">
                                    </a>
                                    <div>
                                        <h6>Toy Car</h6>
                                        <div>1 x $139.58</div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex align-items-center">
                                    <a href="#" class="text-danger me-3" title="Remove">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <a href="#" class="me-3 flex-shrink-0 ">
                                        <img src="../../assets/images/products/5.jpg" class="rounded" width="60"
                                        alt="...">
                                    </a>
                                    <div>
                                        <h6>Sunglasses</h6>
                                        <div>2 x $50,90</div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item d-flex align-items-center">
                                    <a href="#" class="text-danger me-3" title="Remove">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <a href="#" class="me-3 flex-shrink-0 ">
                                        <img src="../../assets/images/products/6.jpg" class="rounded" width="60"
                                        alt="...">
                                    </a>
                                    <div>
                                        <h6>Cake</h6>
                                        <div>1 x $10,50</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h6 class="m-0 px-4 py-3 border-top small">Sub Total : <strong
                            class="text-primary">$1.442,78</strong></h6>
                        </div>
                    </li>
                    <li class="nav-item ms-3">
                        <button class="btn btn-primary btn-icon">
                            <i class="bi bi-plus-circle"></i> Add Product
                        </button>
                    </li>
                </ul>
            </div>
            <!-- Header mobile buttons -->
            <div class="header-mobile-buttons">
                <a href="#" class="search-bar-btn">
                    <i class="bi bi-search"></i>
                </a>
                <a href="#" class="actions-btn">
                    <i class="bi bi-three-dots"></i>
                </a>
            </div>
            <!-- ./ Header mobile buttons -->
        </div>
        <!-- ./ header -->

        <!-- Content -->

        @yield('content')

        <!-- Content end -->

        <!-- content-footer -->
        <footer class="content-footer">
            <div>© 2021 Vetra - <a href="https://laborasyon.com/" target="_blank">Laborasyon</a></div>
            <div>
                <nav class="nav gap-4">
                    <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                    <a href="#" class="nav-link">Change Log</a>
                    <a href="#" class="nav-link">Get Help</a>
                </nav>
            </div>
        </footer>
        <!-- ./ content-footer -->

    </div>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>

<!-- Scripts -->
@include('admin.layout.js_file')

<script src="{{asset('public/backend/js/dashboard.js')}}"></script>
</body>
</html>
