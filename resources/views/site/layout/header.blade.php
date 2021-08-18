
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
                                                    <a href="{{URL::to('/')}}">
                                                        <img class="alignnone wp-image-991" src="{{asset('/public/frontend/images/logo.png')}}" alt="" height="50px">
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
                                        <div class="mini-cart-box  mini-cart1 aside-box">
                                            <a class="mini-cart-link" href="https://vollemobel.7uptheme.net/cart/">
                                                <i class="fal fa-shopping-cart"></i>
                                                @if(Session::get('cart'))
                                                    <span class="mini-cart-number set-cart-number"></span>
                                                @else
                                                    <span class="mini-cart-number set-cart-number">0</span>
                                                @endif
                                            </a>
                                            <div class="mini-cart-content dropdown-list text-left">
                                                <div class="mini-cart-main-content">
                                                    @if(!Session::get('cart'))
                                                        <div class="mini-cart-empty">
                                                            <i class="fal fa-shopping-cart title120 empty-icon"></i>
                                                            <h5 class="desc text-uppercase font-semibold">Giỏ hàng đang trống</h5>
                                                            <p class="title14 return-to-shop woocommerce">
                                                                <a class="button wc-backward" href="#">Tiếp tục mua sắm</a>
                                                            </p>
                                                        </div>
                                                    @endif
                                                </div>
                                                <span class="close-minicart"><i class="fal fa-times"></i></span>
                                            </div>
                                            <div class="cart-overlay"></div>    
                                        </div>
                                        <div class="account-manager dropdown-box "> 
                                            @php
                                                $customer = Session::get('customer_id');
                                                $customer_name = Session::get('customer_name');
                                            @endphp
                                            @if($customer)
                                            <a href="#" class="dropdown dropdown-username" data-toggle="dropdown" role="button" aria-expanded="false">
                                                {{ $customer_name }} <span class="fal fa-angle-down"></span>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ URL::to('/customer/logout') }}">Đăng xuất</a>
                                                </li>
                                            </ul>
                                            @else
                                                <a class="dropdown icon-dropdown" href="#"><i class="fal fa-user"></i></a>    
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ URL::to('customer/login') }}">Đăng Nhập Thành Viên</a></li> 
                                                </ul>
                                            @endif 
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