<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta property="og:url" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/public/frontend/images/favicon.png')}}">

    @include('site.layout.css_file')
</head>
<body class="">
    <div class="wrap">
        @include('site.layout.header')
        <div id="main-content">
            @yield('layout')
        </div>
        @include('site.layout.footer')
    </div>
    @include('site.layout.js_file')
</body>
</html>