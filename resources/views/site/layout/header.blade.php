
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
                                        @php 
                                            $cart = Session::get('cart');
                                        @endphp
                                        <div class="mini-cart-box  mini-cart1 aside-box">
                                            <a class="mini-cart-link" href="https://vollemobel.7uptheme.net/cart/">
                                                <i class="fal fa-shopping-cart"></i>
                                                <span class="mini-cart-number set-cart-number"></span>
                                            </a>
                                            <div class="mini-cart-content dropdown-list text-left">
                                                <div class="mini-cart-main-content">
                                                    @if(Session::has('cart'))
                                                    <div class="mini-cart-has-product">

                                                        <!-- <div class="product-mini-cart list-mini-cart-item">
                                                            @php 
                                                            $total = 0;
                                                            @endphp

                                                            @foreach($cart as $cartItem)
                                                            <div class="item-info-cart product-mini-cart table-custom mini_cart_item">
                                                                <div class="product-thumb">
                                                                    <a href="{{URL::to('/san-pham/'. $cartItem['product_slug'])}}">
                                                                        <img width="50" height="100" src="{{asset('public/uploads/products/'. $cartItem['product_image'])}}" alt="{{$cartItem['product_name']}}">
                                                                    </a>
                                                                </div>
                                                                <div class="product-info">
                                                                    <h3 class="title14 product-title">
                                                                        <a href="{{URL::to('/san-pham/'.$cartItem['product_slug'])}}">{{$cartItem['product_name']}}</a>
                                                                    </h3>
                                                                    <div class="mini-cart-qty">
                                                                        <span class="qty-num">{{$cartItem['qty']}}</span> x 

                                                                        <span class="flex-wrap">
                                                                            @if($cartItem['product_price_sale'] > 0)
                                                                            <span class="price-sale">{{number_format($cartItem['product_price'])}} ₫</span>
                                                                            <span class="price-product color">{{number_format($cartItem['product_price_sale'])}} ₫</span>
                                                                            @else
                                                                            <span class="price-product color">{{number_format($cartItem['product_price'])}} ₫</span>
                                                                            @endif   
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-delete text-right">
                                                                    <a href="{{URL::to('/remove-cart-item/'. $cartItem['session_id'])}}" class="remove-product"><i class="fad fa-trash"></i></a>
                                                                </div>
                                                            </div>

                                                            <?php
                                                                if($cartItem['product_price_sale'] > 0) {
                                                                    $subtotal = $cartItem['qty'] * $cartItem['product_price_sale'];
                                                                } 
                                                                else {
                                                                    $subtotal = $cartItem['qty'] * $cartItem['product_price'];
                                                                }

                                                                $total += $subtotal;
                                                            ?>

                                                            @endforeach
                                                        </div> 
                                                        <div class="mini-cart-total text-uppercase title18 clearfix">
                                                            <span class="pull-left">Tông tiền</span>
                                                            <strong class="pull-right color mini-cart-total-price get-cart-price">{{ number_format($total)}} đ</strong>
                                                        </div>--}}

                                                        <div class="mini-cart-button">
                                                            <a href="{{URL::to('/your-cart')}}" class="button wc-forward">Xem giỏ hàng</a>
                                                            <a href="{{URL::to('/checkout')}}" class="button checkout wc-forward">Thanh Toán</a>
                                                        </div> -->
                                                    </div>
                                                    @else
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
                                            @if (Auth::guest())
                                            <a class="dropdown icon-dropdown" href="#"><i class="fal fa-user"></i></a>    
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('login') }}">Đăng Nhập Admin</a></li>
                                                {{-- <li><a href="{{ route('register') }}">Register</a></li>     --}}
                                            </ul>
                                            @else
                                            <a href="#" class="dropdown dropdown-username" data-toggle="dropdown" role="button" aria-expanded="false">
                                                {{ Auth::user()->name }} <span class="fal fa-angle-down"></span>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>
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