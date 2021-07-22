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
            <div class="banner-slider banner-slider-3 ">
                <div class="wrap-item sv-slider  pagi-nav-style owl-carousel owl-theme" data-item="1" data-speed="5000" data-itemres="" data-animation="fade" data-navigation="" data-pagination="pagi-nav-style" data-prev="" data-next="">
                    <div class="item-slider  item-slider-3 ">
                        <div class="banner-thumb">
                            <a href="#">
                                <img width="1920" height="950" src="{{asset('public/frontend/images/4.jpg')}}" class="attachment-full size-full" alt=""/>
                            </a>
                        </div>
                        <div class="banner-info">
                            <div class="container">
                                <div class="slider-content-text  text-left text-uppercase" data-animated="">
                                    <h3 class="juliussans-font title60 text-uppercase black">Floor Lamp</h3>
                                    <p class="title24 text-upercase font-bold black">laser cutter</p>
                                    <div class="button">
                                        <a class="title14 more black" href="https://vollemobel.7uptheme.net/product/lipzor-light-3/">Discover now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-slider  item-slider-3 ">
                        <div class="banner-thumb">
                            <a href="#"><img width="1920" height="950" src="{{asset('public/frontend/images/10.jpg')}}" /></a>
                        </div>
                        <div class="banner-info">
                            <div class="container">
                                <div class="slider-content-text  text-left text-uppercase" data-animated="">
                                    <h3 class="juliussans-font title60 text-uppercase black">Diamond gold</h3>
                                    <p class="title24 text-upercase font-bold black">Diamond lamp is modern</p>
                                    <div class="button"><a class="title14 more black" href="https://vollemobel.7uptheme.net/product/light-classic-2/">Discover now</a></div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row wpb_row h3-banner-wrap mb150">
                    <div class="col-sm-4 col-xs-12">
                        <div class="banner-advs h3-banner-adv res767-mb50  zoom-image">
                            <a href="https://vollemobel.7uptheme.net/product/engage-task-stool-3/" class="adv-thumb-link">    
                                <img width="372" height="506" src="{{asset('/public/frontend/images/h3-banner-1.png')}}"> 
                            </a>            
                            <div class="banner-info ">
                                <h3 class="title24 font-bold text-uppercase black">Thời trang nam</h3>
                                <p class="desc">Bộ sưu tập thu đông</p>
                                <p><a class="title14 text-uppercase more black" href="#">Xem thêm</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="banner-advs h3-banner-adv h3-banner-adv2 res767-mb50  zoom-image">
                            <a href="https://vollemobel.7uptheme.net/product/wall-light/" class="adv-thumb-link">    
                                <img width="372" height="506" src="{{asset('/public/frontend/images/h3-banner-2.png')}}">   
                            </a>            
                            <div class="banner-info ">
                                <h3 class="title24 font-bold text-uppercase white">Khuyễn mãi 20%</h3>
                                <p class="desc white">Nhân dịp khai trương</p>
                                <p><a class="title14 text-uppercase more white" href="#">Mua ngay</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="banner-advs h3-banner-adv  zoom-image">
                            <a href="https://vollemobel.7uptheme.net/product/table-living-dining/" class="adv-thumb-link">    
                                <img width="372" height="506" src="{{asset('/public/frontend/images/h3-banner-3.png')}}">   
                            </a>            
                            <div class="banner-info ">
                                <h3 class="title24 font-bold text-uppercase black">Thời trang nữ</h3>
                                <p class="desc">Mẫu mã theo xu hướng</p>
                                <p><a class="title14 text-uppercase more black" href="#">Xem thêm</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row wpb_row mb150">
                    <div class="col-sm-12">
                        <div class="content-editor h3-title ">
                            <div class="content-info ">
                                <h3 class="title24 font-bold text-uppercase">Sản phẩm mới</h3>
                            </div>
                        </div>
                        <div class="tabs-block block-element h3-tabs tab-style2 tab-ajax-off">
                            <div class="vc_tta-panel-body">
                                <div class="block-element  product-slider-view  slider filter- js-content-wrap">
                                    <span class="found_posts hidden">23 <span class="lb">items</span></span>
                                    <div class="list-product-wrap">
                                        <div class="wrap-item smart-slider js-content-main clearfix group-navi " data-item="4" data-speed="" data-itemres="" data-prev="" data-next=""  data-pagination="" data-navigation="group-navi">
                                            <div class="item">  
                                                <div class="product type-product status-publish has-post-thumbnail">
                                                    <div class="item-product item-product-grid item-product-style2">
                                                        <div class="product-thumb">
                                                            <a href="#">
                                                                <img width="252" height="288" src="{{asset('/public/frontend/images/15.1.jpg')}}" class="attachment-252x288 size-252x288 wp-post-image" alt="" />
                                                            </a>        
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title14 product-title">
                                                                <a title="Laborum Chair" href="#">Laborum Chair</a>
                                                            </h3>
                                                            <div class="product-price price variable">
                                                                <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span></div>         
                                                            <div class="product-extra-link">
                                                                <a href="#"  title="Add to cart" class="btn btn-primary btn-add-cart"><span>Thêm vào giỏ hàng</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">  
                                                <div class="product type-product status-publish has-post-thumbnail">
                                                    <div class="item-product item-product-grid item-product-style2">
                                                        <div class="product-thumb">
                                                            <a href="#">
                                                                <img width="252" height="288" src="{{asset('/public/frontend/images/5.1.jpg')}}" class="attachment-252x288 size-252x288 wp-post-image" alt="" />
                                                            </a>        
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title14 product-title">
                                                                <a title="Laborum Chair" href="#">Otis T-Shirt</a>
                                                            </h3>
                                                            <div class="product-price price variable">
                                                                <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span></div>         
                                                            <div class="product-extra-link">
                                                                <a href="#"  title="Add to cart" class="btn btn-primary btn-add-cart"><span>Thêm vào giỏ hàng</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">  
                                                <div class="product type-product status-publish has-post-thumbnail">
                                                    <div class="item-product item-product-grid item-product-style2">
                                                        <div class="product-thumb">
                                                            <a href="#">
                                                                <img width="252" height="288" src="{{asset('/public/frontend/images/1.png')}}" alt="" />
                                                            </a>        
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title14 product-title">
                                                                <a title="Laborum Chair" href="#">Laborum Chair</a>
                                                            </h3>
                                                            <div class="product-price price variable">
                                                                <span class="price-sale">650,000 đ</span>
                                                                <span class="Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span>
                                                            </div>         
                                                            <div class="product-extra-link">
                                                                <a href="#"  title="Add to cart" class="btn btn-primary btn-add-cart"><span>Thêm vào giỏ hàng</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">  
                                                <div class="product type-product status-publish has-post-thumbnail">
                                                    <div class="item-product item-product-grid item-product-style2">
                                                        <div class="product-thumb">
                                                            <a href="#">
                                                                <img width="252" height="288" src="{{asset('/public/frontend/images/2.png')}}" alt="" />
                                                            </a>        
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title14 product-title">
                                                                <a title="Laborum Chair" href="#">Laborum Chair</a>
                                                            </h3>
                                                            <div class="product-price price variable">
                                                                <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span></div>         
                                                            <div class="product-extra-link">
                                                                <a href="#"  title="Add to cart" class="btn btn-primary btn-add-cart"><span>Thêm vào giỏ hàng</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">  
                                                <div class="product type-product status-publish has-post-thumbnail">
                                                    <div class="item-product item-product-grid item-product-style2">
                                                        <div class="product-thumb">
                                                            <a href="#">
                                                                <img width="252" height="288" src="{{asset('/public/frontend/images/3.png')}}" alt="" />
                                                            </a>        
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title14 product-title">
                                                                <a title="Laborum Chair" href="#">Laborum Chair</a>
                                                            </h3>
                                                            <div class="product-price price variable">
                                                                <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span></div>         
                                                            <div class="product-extra-link">
                                                                <a href="#"  title="Add to cart" class="btn btn-primary btn-add-cart"><span>Thêm vào giỏ hàng</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">  
                                                <div class="product type-product status-publish has-post-thumbnail">
                                                    <div class="item-product item-product-grid item-product-style2">
                                                        <div class="product-thumb">
                                                            <a href="#">
                                                                <img width="252" height="288" src="{{asset('/public/frontend/images/5.png')}}" alt="" />
                                                            </a>        
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title14 product-title">
                                                                <a title="Laborum Chair" href="#">Laborum Chair</a>
                                                            </h3>
                                                            <div class="product-price price variable">
                                                                <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span></div>         
                                                            <div class="product-extra-link">
                                                                <a href="#"  title="Add to cart" class="btn btn-primary btn-add-cart"><span>Thêm vào giỏ hàng</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row wpb_row mb150">
                    <div class="col-sm-12">
                        <div class="content-editor h3-title ">
                            <div class="content-info ">
                                <h3 class="title24 font-bold text-uppercase">Sản phẩm bán chạy</h3>
                            </div>
                        </div>
                        <div class="tabs-block block-element h3-tabs tab-style2 tab-ajax-off">
                            <div class="vc_tta-panel-body">
                                <div class="block-element  product-slider-view  slider filter- js-content-wrap">
                                    <span class="found_posts hidden">23 <span class="lb">items</span></span>
                                    <div class="list-product-wrap">
                                        <div class="wrap-item smart-slider js-content-main clearfix group-navi " data-item="4" data-speed="" data-itemres="" data-prev="" data-next=""  data-pagination="" data-navigation="group-navi">
                                            <div class="item">  
                                                <div class="product type-product status-publish has-post-thumbnail">
                                                    <div class="item-product item-product-grid item-product-style2">
                                                        <div class="product-thumb">
                                                            <a href="#">
                                                                <img width="252" height="288" src="{{asset('/public/frontend/images/15.1.jpg')}}" class="attachment-252x288 size-252x288 wp-post-image" alt="" />
                                                            </a>        
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title14 product-title">
                                                                <a title="Laborum Chair" href="#">Laborum Chair</a>
                                                            </h3>
                                                            <div class="product-price price variable">
                                                                <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span></div>         
                                                            <div class="product-extra-link">
                                                                <a href="#"  title="Add to cart" class="btn btn-primary btn-add-cart"><span>Thêm vào giỏ hàng</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">  
                                                <div class="product type-product status-publish has-post-thumbnail">
                                                    <div class="item-product item-product-grid item-product-style2">
                                                        <div class="product-thumb">
                                                            <a href="#">
                                                                <img width="252" height="288" src="{{asset('/public/frontend/images/5.1.jpg')}}" class="attachment-252x288 size-252x288 wp-post-image" alt="" />
                                                            </a>        
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title14 product-title">
                                                                <a title="Laborum Chair" href="#">Otis T-Shirt</a>
                                                            </h3>
                                                            <div class="product-price price variable">
                                                                <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span></div>         
                                                            <div class="product-extra-link">
                                                                <a href="#"  title="Add to cart" class="btn btn-primary btn-add-cart"><span>Thêm vào giỏ hàng</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">  
                                                <div class="product type-product status-publish has-post-thumbnail">
                                                    <div class="item-product item-product-grid item-product-style2">
                                                        <div class="product-thumb">
                                                            <a href="#">
                                                                <img width="252" height="288" src="{{asset('/public/frontend/images/1.png')}}" alt="" />
                                                            </a>        
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title14 product-title">
                                                                <a title="Laborum Chair" href="#">Laborum Chair</a>
                                                            </h3>
                                                            <div class="product-price price variable">
                                                                <span class="price-sale">650,000 đ</span>
                                                                <span class="Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span>
                                                            </div>         
                                                            <div class="product-extra-link">
                                                                <a href="#"  title="Add to cart" class="btn btn-primary btn-add-cart"><span>Thêm vào giỏ hàng</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">  
                                                <div class="product type-product status-publish has-post-thumbnail">
                                                    <div class="item-product item-product-grid item-product-style2">
                                                        <div class="product-thumb">
                                                            <a href="#">
                                                                <img width="252" height="288" src="{{asset('/public/frontend/images/2.png')}}" alt="" />
                                                            </a>        
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title14 product-title">
                                                                <a title="Laborum Chair" href="#">Laborum Chair</a>
                                                            </h3>
                                                            <div class="product-price price variable">
                                                                <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span></div>         
                                                            <div class="product-extra-link">
                                                                <a href="#"  title="Add to cart" class="btn btn-primary btn-add-cart"><span>Thêm vào giỏ hàng</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">  
                                                <div class="product type-product status-publish has-post-thumbnail">
                                                    <div class="item-product item-product-grid item-product-style2">
                                                        <div class="product-thumb">
                                                            <a href="#">
                                                                <img width="252" height="288" src="{{asset('/public/frontend/images/3.png')}}" alt="" />
                                                            </a>        
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title14 product-title">
                                                                <a title="Laborum Chair" href="#">Laborum Chair</a>
                                                            </h3>
                                                            <div class="product-price price variable">
                                                                <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span></div>         
                                                            <div class="product-extra-link">
                                                                <a href="#"  title="Add to cart" class="btn btn-primary btn-add-cart"><span>Thêm vào giỏ hàng</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">  
                                                <div class="product type-product status-publish has-post-thumbnail">
                                                    <div class="item-product item-product-grid item-product-style2">
                                                        <div class="product-thumb">
                                                            <a href="#">
                                                                <img width="252" height="288" src="{{asset('/public/frontend/images/5.png')}}" alt="" />
                                                            </a>        
                                                        </div>
                                                        <div class="product-info">
                                                            <h3 class="title14 product-title">
                                                                <a title="Laborum Chair" href="#">Laborum Chair</a>
                                                            </h3>
                                                            <div class="product-price price variable">
                                                                <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span></div>         
                                                            <div class="product-extra-link">
                                                                <a href="#"  title="Add to cart" class="btn btn-primary btn-add-cart"><span>Thêm vào giỏ hàng</span></a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('/public/frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('/public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/public/frontend/js/tabs.min.js')}}"></script>
    <script src="{{asset('/public/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/public/frontend/js/scripts.js')}}"></script>
</body>
</html>