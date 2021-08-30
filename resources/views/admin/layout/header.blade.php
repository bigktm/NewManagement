@php 
    $admin_id = Session::get('admin_id');
    $admin_name = Session::get('admin_name');
@endphp
<div class="header">
    <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
        <a href="#">
            <i class="bi bi-list"></i>
        </a>
    </div>
    <div class="page-title">@yield('title-page')</div>
    {{-- <form class="search-form">
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
    </form> --}}
    <div class="header-bar ms-auto">
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item">
                <a href="#" class="nav-link nav-link-notify" data-count="2">
                    <i class="bi bi-bell icon-lg"></i>
                </a>
            </li>
            <li class="nav-item ms-3">
                <div class="d-flex align-items-center">
                    <div class="avatar me-3">
                        <img src="{{asset('public/backend/images/avatar.jpg')}}"class="rounded-circle" alt="image">
                    </div>
                    <div>
                        @if (!$admin_id)
                        @else
                        <div class="fw-bold text-capitalize"> {{ $admin_name }}</div>
                        <a href="{{ URL::to('logout-admin') }}" class="text-muted">Đăng Xuất</a>
                        @endif
                    </div>
                </div>
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