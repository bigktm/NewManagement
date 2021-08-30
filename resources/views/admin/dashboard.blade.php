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
        $('#datatable-search').DataTable({
            responsive: true,
            "order": [[ 1, "desc" ]]
        });
        $('.date_coupon').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        });

        $('.attributes_add--row').click(function(){
            $('.attributes_rows').append('<div class="attributes_div mb-3"><button class="btn btn-danger remove_attributes_rows btn-sm">Xoá</button><div class="form-group mb-2 col-md-6"><label>Tên thuộc tính</label><input type="text" class="form-control" placeholder="Nhập tên thuộc tính, ví dụ: màu sắc, size v.v" name="attributes_name[]"></div><div class="attributes_div--child mb-3"><p>Chi tiết thuộc tính </p><div class="attributes_item--child row mb-2"><div class="col-md-4 col-xs-12"><input type="text" class="form-control" placeholder="Nhập thuộc tính , ví dụ: M, L, Đen,Đỏ" name="attributes_value[]"></div><div class="col-md-4 col-xs-12"><input type="text" class="form-control" placeholder="Số lượng trong kho" name="attributes_qty[]"></div><div class="col-md-4 col-xs-12"><input type="text" class="form-control" placeholder="Giá bán" name="attributes_price[]"></div></div></div><button type="button" class="btn btn-info btn-sm add_attr_item">Thêm chi tiết thuộc tính</button></div>');
        }); 

        $(document).on("click",".add_attr_item", function () {
            $(this).parent().find('.attributes_div--child').append('<div class="attributes_item--child row mb-2"><div class="col-md-4 col-xs-12"><input type="text" class="form-control" placeholder="Nhập thuộc tính , ví dụ: M, L, Đen,Đỏ" name="attributes_value[]"></div><div class="col-md-4 col-xs-12"><input type="text" class="form-control" placeholder="Số lượng trong kho" name="attributes_qty[]"></div><div class="col-md-4 col-xs-12"><input type="text" class="form-control" placeholder="Giá bán" name="attributes_price[]"></div><button type="button" class="btn btn-danger btn-sm remove_attr"><i class="fad fa-trash"></i></button></div>');
        });

        $(document).on("click",".remove_attr, .remove_attributes_rows", function () {
            $(this).parent().remove();
        });
        

        ClassicEditor.create( document.querySelector( '#editor' ), {
            image: {
                toolbar: [ 'toggleImageCaption', 'imageTextAlternative' ]
            }
        });
        
    });
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
            url: '{{url('/delivery/select-delivery')}}',
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
</script>
</body>
</html>
