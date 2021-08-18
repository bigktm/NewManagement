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
        <img src="{{asset('public/backend/images/logo.png')}}" alt="logo">
        <div class="preloader-icon"></div>
    </div>
    <!-- ./ preloader -->
    <!-- menu -->
    @include('admin.layout.sidebar')
    <!-- ./  menu -->
    <!-- layout-wrapper -->
    <div class="layout-wrapper">
        <!-- header -->
        @include('admin.layout.header')
        <!-- ./ header -->
        <!-- Content -->
        @yield('content')
        <!-- Content end -->
        <!-- content-footer -->
        @include('admin.layout.footer')
        <!-- ./ content-footer -->
    </div>
</div>
<!-- Scripts -->
@include('admin.layout.js_file')

<script src="{{asset('public/backend/js/dashboard.js')}}"></script>

<script>

    $(document).ready(function(){

        $('.date_coupon').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });

        ClassicEditor.create(document.querySelector('#editor'));
        
    });
</script>
</body>
</html>
