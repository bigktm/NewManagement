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
<script>
{{--  --}}  

    function count_cart() {
        $.ajax({
            url:'{{url('/count-cart')}}',
            method:"GET",
            success:function(data){
                $('.set-cart-number').html(data);
            }
        }); 
    };
    function mini_cart() {
        $.ajax({
            url:'{{url('/mini-cart')}}',
            method:"GET",
            success:function(data){
                $('.mini-cart-main-content').html(data);
            }
        }); 
    };
    function addToCart(event) {
        event.preventDefault();
        var url = $(this).data('url');
        var seff = $(this);
        seff.find('i.fa-check').remove();
        seff.append('<i class="fas fa-cog fa-spin"></i>');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: url,
            dataType: 'json',
            crossDomain: true,
            success: function (data) { 
                seff.find('.fa-cog').remove();
                seff.append('<i class="fal fa-check"></i>');
                swal({
                    title: "Đã thêm vào giỏ hàng",
                    text: "Bạn có thể đi tới trang giỏ hàng để thanh toán",
                    type: "success",
                    showCancelButton: true,
                    successMode: true,
                    cancelButtonClass: '#000',
                    cancelButtonText: 'Mua tiếp',
                    confirmButtonColor: '#dc9814',
                    confirmButtonText: 'Xem Giỏ Hàng',
                }, function(){
                    window.location.href = "{{url('your-cart')}}";
                });
                count_cart();
                mini_cart();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    };

    
    $(function () {
        $('.ajax_add_to_cart').on('click', addToCart);
        count_cart();
        mini_cart(); 
    });

</script>
</html>