<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta property="og:url" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/public/frontend/images/favicon.png')}}">
    <!-- Custom fonts for this template-->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet" type="text/css"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500&display=swap" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="{{asset('/public/frontend/css/bootstrap.min.css')}}" rel="stylesheet"> 
    <link href="{{asset('/public/frontend/css/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('/public/frontend/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('/public/frontend/css/theme.css')}}" rel="stylesheet">
    <link href="{{asset('/public/frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/public/frontend/css/responsives.css')}}" rel="stylesheet">
</head>
<body class="">
    <div class="wrap">
        <div id="header" class="header-page" style="min-height: 120px;">
            <div class="container-fluid">
                <div class="vc_row wpb_row header-row header-s1 header-s2 header-s3 vc_rtl-columns-reverse vc_row-o-equal-height vc_row-o-content-middle vc_row-flex header_row" style="">
                    <div class="wpb_column column_container col-sm-12 col-md-12 col-xs-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="vc_row wpb_row vc_inner header-left pull-left">
                                    <div class="wpb_column column_container col-sm-12 col-md-12 col-xs-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <nav class="main-nav  main-nav2 menu-sticky-on">
                                                    <a href="#" class="toggle-mobile-menu">
                                                        <i class="fal fa-bars"></i>
                                                        <i class="fal fa-times"></i>
                                                    </a>
                                                    <ul id="menu-main-menu" class="list-none">
                                                        <span class="close-mobile-menu"><i class="fal fa-times"></i></span>
                                                        <li class="main-menu-item menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children">
                                                            <a href="#" class="menu-link main-menu-link">Home</a>
                                                        </li>
                                                        <li class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                                                            <a href="#">About</a>
                                                        </li>
                                                        <li class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page">
                                                            <a href="#" class="menu-link main-menu-link">Contact</a>
                                                        </li>
                                                    </ul>
                                                    <div class="overlay-fixed"></div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_inner header-middle">
                                    <div class="wpb_column column_container col-sm-12 col-md-12 col-xs-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="logo ">
                                                    <div class="text-logo">
                                                        <h1 class="color">             
                                                            <a href="#">
                                                                <img class="alignnone wp-image-991" src="{{asset('/public/frontend/images/logo.png')}}" alt="" width="35" height="39">
                                                                <strong>HT STORE</strong>
                                                            </a>
                                                        </h1> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_inner header-right pull-right">
                                    <div class="wpb_column column_container col-sm-12 col-md-12 col-xs-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="block-element block-search-element  search-icon">
                                                    <a class="s-icon" href="javascript:;">
                                                        <i class="fal fa-search"></i><i class="fal fa-times"></i>
                                                    </a>
                                                    <div class="search-form-wrap">
                                                        <form class="search-form  search-icon live-search-on" action="https://vollemobel.7uptheme.net/">
                                                            <input class="animated fadeInUp" name="s" autocomplete="off" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Search..." type="text">
                                                            <input type="hidden" name="post_type" value="product">
                                                            <div class="submit-form">
                                                                <input type="submit" value="">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="account-manager dropdown-box ">
                                                    <a class="open-login-form" href="#"><i class="fal fa-user"></i></a>    
                                                    <ul class="list-none dropdown-list">
                                                        <li><a class="login-popup" href="#">Login / Register</a></li>    
                                                    </ul>
                                                </div>
                                                <div class="mini-cart-box  mini-cart1 aside-box">
                                                    <a class="mini-cart-link" href="https://vollemobel.7uptheme.net/cart/">
                                                        <i class="fal fa-shopping-cart"></i>
                                                        <span class="mini-cart-number set-cart-number">0</span>
                                                    </a>
                                                    <div class="mini-cart-content dropdown-list text-left">
                                                        <h2 class="title18 font-bold"><span class="set-cart-number">0</span> items</h2>
                                                        <div class="mini-cart-main-content">

                                                            <div class="mini-cart-empty">
                                                                <i class="fal fa-shopping-cart title120 empty-icon"></i>
                                                                <h5 class="desc text-uppercase font-semibold">No products in the cart.</h5>
                                                                <p class="title14 return-to-shop woocommerce">
                                                                    <a class="button wc-backward" href="#">
                                                                    Go Shop                </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <span class="close-minicart"><i class="fal fa-times"></i></span>
                                                    </div>
                                                    <div class="cart-overlay"></div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
            </div>
        </div>
        <div id="main-content">
            @yield('layout')
        </div>
        <div id="footer" class="footer-page">
            <div class="vc_row row footer-newsletter">
                <div class="col-sm-12">
                    <div class="block-element newsletter-form text-center  sv-mailchimp-form" data-placeholder="Nhập địa chỉ email của bạn" data-submit="Đăng ký">
                        <h3 class="title24 font-bold text-uppercase">Nhận thông tin khuyễn mãi</h3>
                        <p class="mail-desc desc">Đăng ký để nhận thông tin cập nhật hàng mới về, ưu đãi đặc biệt và thông tin giảm giá khác.</p>
                        <div class="form-newsletter">
                            <form id="" class="mc4wp-form mc4wp-form-482" method="post" data-id="" data-name="Mailchimp">
                                <div class="mc4wp-form-fields">
                                    <input type="email" name="EMAIL" placeholder="Nhập địa chỉ email của bạn" required="">
                                    <div class="submit-form">
                                        <input type="submit" value="Đăng ký">
                                    </div>
                                </div>
                                <input type="hidden" name="_mc4wp_timestamp" value="1626961490">
                                <input type="hidden" name="_mc4wp_form_id" value="482">
                                <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                                <div class="mc4wp-response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>

            <div class="container">
                <div class="vc_row row footer-top pt50">
                    <div class="col-sm-12 col-md-3 col-xs-12">
                        <div class="logo footer-logo">
                            <div class="text-logo">
                                <h1 class="color">             
                                    <a href="{{URL::to('/')}}">
                                        <img class="alignnone size-full wp-image-991" src="{{asset('public/frontend/images/logo.png')}}" alt="" width="35" height="39"><strong>HT Store</strong>            
                                    </a>
                                </h1>     
                            </div>
                        </div>
                        <div class="content-editor footer-contact ">
                            <div class="content-info ">
                                <ul class="list-none">
                                    <li>
                                        <p class="desc">666 Ngô Quyền - P.An Hải Bắc - Q. Sơn Trà - TP. Đà Nẵng
                                        </p>
                                    </li>
                                    <li><a href="tel:+84989177556">037 4466 344</a></li>
                                    <li><a href="tel:+844378311160">035 9812 063</a></li>
                                    <li><a href="mailto:hoanganh94cit@gmail.com">hoanganh94cit@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-xs-12">
                        <div class="content-editor footer-box ">
                            <div class="content-info ">
                                <h3 class="title14 font-bold text-uppercase">Thông tin thêm</h3>
                                <ul class="list-none">
                                    <li><a href="#">Về chúng tôi</a></li>
                                    <li><a href="#">Liên Hệ</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Điều khoản & Điều kiện</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-xs-12">
                        <div class="content-editor footer-box ">
                            <div class="content-info ">
                                <h3 class="title14 font-bold text-uppercase">Dịch Vụ</h3>
                                <ul class="list-none">
                                    <li><a href="#">Chính sách vận chuyển</a></li>
                                    <li><a href="#">Thông tin giao hàng</a></li>
                                    <li><a href="#">F.A.Q.'s</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-xs-12">
                        <div class="content-editor footer-box ">
                            <div class="content-info ">
                                <h3 class="title14 font-bold text-uppercase">Liên kết </h3>
                                <ul class="list-none">
                                    <li><a class="float" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i> <span class="text-hidden">Facebook</span></a></li>
                                    <li><a class="float" href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="fab fa-google-plus-g"></i> <span class="text-hidden">Google</span></a></li>
                                    <li><a class="float" href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i> <span class="text-hidden">Instagram</span></a></li>
                                    <li><a class="float" href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i> <span class="text-hidden">Twitter</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row row footer-bottom ">
                    <div class="col-sm-8 col-md-8 col-xs-12">
                        <div class="content-editor footer-copyright">
                            <div class="content-info ">
                                <p class="desc">Copyright <a class="color2" href="{{URL::to('/')}}">HT Store</a> 2021.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-xs-12">
                        <div class="content-editor footer-payment text-right ">
                            <div class="content-info ">
                                <ul class="list-inline-block">
                                    <li><a class="float" href="#"><img class="alignnone size-full wp-image-1092" src="https://vollemobel.7uptheme.net/wp-content/uploads/2018/09/paymethod1.jpg" alt="" width="100" height="40"></a></li>
                                    <li><a class="float" href="#"><img class="alignnone size-full wp-image-1093" src="https://vollemobel.7uptheme.net/wp-content/uploads/2018/09/paymethod2.jpg" alt="" width="100" height="40"></a></li>
                                    <li><a class="float" href="#"><img class="alignnone size-full wp-image-1094" src="https://vollemobel.7uptheme.net/wp-content/uploads/2018/09/paymethod3.jpg" alt="" width="100" height="40"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('/public/frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('/public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/public/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/public/frontend/js/jquery.jcarousellite.min.js')}}"></script>
    <script src="{{asset('/public/frontend/js/jquery.elevatezoom.min.js')}}"></script>
    <script src="{{asset('/public/frontend/js/scripts.js')}}"></script>
</body>
</html>