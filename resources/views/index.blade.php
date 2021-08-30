<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{$meta_title}}</title>
    <meta charset="utf-8">
    <meta name="keywords" content="{{$meta_keyworks}}">
    <meta name="description" content="{{$meta_desc}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta property="og:url" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/public/frontend/images/favicon.png')}}">
    <link rel="canonical" href="{{$meta_canonical}}">
    @include('site.layout.css_file')
</head>
<body class="">
    <a href="#" class="scroll-top dark">
        <span class="text-bttop">Về đầu trang</span>
        <i class="fal fa-long-arrow-right"></i>
    </a>
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

    {{-- AJAX CART --}}
    $(function () {
        $('.ajax_add_to_cart').on('click', addToCart);
        count_cart();
        mini_cart(); 
    });
    
    $(document).on("click",".remove-this-item", function () {
        event.preventDefault();
        var url_del = $(this).data('url');
        $.ajax({
            url: url_del,
            method:"GET",
            success:function(data){
                $('.mini-cart-main-content').html(data);
                count_cart();
                mini_cart(); 
            }
        }); 
    });
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
                count_cart();
                mini_cart();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    };


    
    $('.select_address').on('change', function() {
        var action = $(this).attr('id');
        var ma_id = $(this).val();
        var result = '';

        if(action == 'city'){
            result = 'province';
        }else {
            result = 'ward';
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: '{{url('/select-delivery')}}',
            crossDomain: true,
            data:{action:action, ma_id:ma_id},
            success: function (data) { 
                $('#'+result).html(data);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

    });

    // function fee_feeship() {
    //     $.ajax({
    //         url:'{{url('/fee-feeship')}}',
    //         method:"GET",
    //         success:function(data){
    //             $('#ship_fee').html(data);
    //         }
    //     }); 
    // };

    // $('.ward').on('change', function() {
    //     var matp = $('.city').val();
    //     var maqh = $('.province').val();
    //     var xaid = $('.ward').val();

    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });

    //     $.ajax({
    //         type: "POST",
    //         url: '{{url('/calculator-fee')}}',
    //         crossDomain: true,
    //         data:{matp:matp, maqh:maqh, xaid:xaid},
    //         success: function (data) {
    //             fee_feeship();
    //         },
    //         error: function (data) {
    //             console.log('Error:', data);
    //         }
    //     }); 

    // });

</script>
</html>