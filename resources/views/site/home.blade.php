@extends('index')
@section('title', 'Trang Chủ')
@section('layout')
<style>
    .header-page {
        position: absolute;
    }
</style>
<div class="banner-slider banner-slider-3 ">
    <div class="wrap-item sv-slider  pagi-nav-style owl-carousel owl-theme" data-item="1" data-speed="5000" data-itemres="" data-animation="fade" data-navigation="" data-pagination="pagi-nav-style" data-prev="" data-next="">
        @foreach($slider_list as $key => $slide)
        <div class="item-slider  item-slider-3 ">
            <div class="banner-thumb">
                <a href="#">
                    <img width="1920" height="950" src="{{asset('public/uploads/sliders/'. $slide->slider_image)}}" class="attachment-full size-full" alt=""/>
                </a>
            </div>
            <div class="banner-info">
                <div class="container">
                    <div class="slider-content-text  text-left text-uppercase" data-animated="">
                        <h3 class="juliussans-font title60 text-uppercase black">{{$slide->slider_title}}</h3>
                        <p class="title24 text-upercase font-bold black">{{$slide->slider_subtitle}}</p>
                        <div class="button">
                            <a class="title14 more black" href="{{URL::to('/danh-muc/'. $slide->category_slug)}}">Xem Thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="container">
    <div class="row wpb_row h3-banner-wrap mb150">
        <div class="col-sm-4 col-xs-12">
            <div class="banner-advs h3-banner-adv res767-mb50  zoom-image">
                <a href="{{URL::to('/danh-muc/thoi-trang-nam')}}" class="adv-thumb-link">    
                    <img width="372" height="506" src="{{asset('/public/frontend/images/h3-banner-1.png')}}"> 
                </a>            
                <div class="banner-info ">
                    <h3 class="title24 font-bold text-uppercase white">Thời trang nam</h3>
                    <p class="desc white">Bộ sưu tập thu đông</p>
                    <p><a class="title14 text-uppercase more white" href="{{URL::to('/danh-muc/thoi-trang-nam')}}">Xem thêm</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="banner-advs h3-banner-adv h3-banner-adv2 res767-mb50  zoom-image">
                <a href="{{URL::to('/danh-muc/thoi-trang-nam')}}" class="adv-thumb-link">    
                    <img width="372" height="506" src="{{asset('/public/frontend/images/h3-banner-2.png')}}">   
                </a>            
                <div class="banner-info ">
                    <h3 class="title24 font-bold text-uppercase white">Khuyễn mãi 20%</h3>
                    <p class="desc white">Nhân dịp khai trương</p>
                    <p><a class="title14 text-uppercase more white" href="{{URL::to('/danh-muc/thoi-trang-nam')}}">Mua ngay</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="banner-advs h3-banner-adv  zoom-image">
                <a href="{{URL::to('/danh-muc/thoi-trang-nu')}}" class="adv-thumb-link">    
                    <img width="372" height="506" src="{{asset('/public/frontend/images/h3-banner-3.png')}}">   
                </a>            
                <div class="banner-info ">
                    <h3 class="title24 font-bold text-uppercase white">Thời trang nữ</h3>
                    <p class="desc white">Mẫu mã theo xu hướng</p>
                    <p><a class="title14 text-uppercase more white" href="{{URL::to('/danh-muc/thoi-trang-nu')}}">Xem thêm</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row wpb_row mb150">
        <div class="col-sm-12">
            <div class="content-editor h3-title ">
                <div class="content-info ">
                    <h3 class="title24 font-bold text-uppercase mb-4">Sản phẩm mới</h3>
                </div>
            </div>
            <div class="tabs-block block-element h3-tabs tab-style2 tab-ajax-off">
                <div class="vc_tta-panel-body">
                    <div class="block-element  product-slider-view  slider filter- js-content-wrap">
                        <div class="list-product-wrap">
                            <div class="wrap-item smart-slider js-content-main clearfix group-navi " data-item="4" data-speed="" data-itemres="" data-prev="" data-next=""  data-pagination="" data-navigation="group-navi">
                                @foreach($product_new as $product_new)
                                <div class="item">  
                                    
                                    <div class="product type-product status-publish has-post-thumbnail">
                                        <div class="item-product item-product-grid item-product-style2">
                                            <div class="product-thumb">
                                                <a href="{{URL::to('/san-pham/'.$product_new->product_slug)}}" class="product-thumb-link rotate-thumb" >
                                                    <img  src="{{asset('/public/uploads/products/'.$product_new->product_image)}}" alt="{{$product_new->product_name}}" />
                                                    <img  src="{{asset('/public/uploads/products/'.$product_new->product_image)}}" alt="" />
                                                </a>       
                                                <div class="product-label">
                                                    @if($product_new->product_price_sale > 0)
                                                    <span class="sale">Sale</span>
                                                    @endif
                                                </div>  
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title">
                                                    <a title="Laborum Chair" href="{{URL::to('/san-pham/'.$product_new->product_slug)}}">{{$product_new->product_name}}</a>
                                                </h3>
                                                <div class="product-price price variable">
                                                    @if($product_new->product_price_sale > 0)
                                                    <span class="price-sale">{{number_format($product_new->product_price)}} đ</span>
                                                    <span class="Price-amount">{{number_format($product_new->product_price_sale)}} đ</span>
                                                    @else
                                                    <span class="Price-amount">{{number_format($product_new->product_price)}} đ</span>
                                                    @endif
                                                </div>         
                                                <div class="product-extra-link">
                                                    <button class="btn btn-primary ajax_add_to_cart btn-add-cart" data-url="{{URL::to('add-to-cart/'.$product_new->product_id)}}"><span>Thêm vào giỏ hàng</span></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-advs shop-banner  zoom-image line-scale mb-5">
        <a href="#" class="adv-thumb-link"> 
            <img width="1130" height="360" src="{{asset('/public/frontend/images/banner-shop-grid.jpg')}}"> 
        </a>            
        <div class="banner-info ">
            <h2 class="title60 juliussans-font text-uppercase black">Flash Sale</h2>
            <h3 class="title24 text-uppercase font-bold black">Thời trang nam</h3>
            <h3 class="title24 text-uppercase font-bold color2">Giảm giá lên tới 50%</h3>
            <p><a class="more title14 text-uppercase black" href="#">Mua ngay</a></p>
        </div>
    </div>
    <div class="row wpb_row mb150">
        <div class="col-sm-12">
            <div class="content-editor h3-title ">
                <div class="content-info ">
                    <h3 class="title24 font-bold text-uppercase mb-4">Thời trang nam</h3>
                </div>
            </div>
            <div class="tabs-block block-element h3-tabs tab-style2 tab-ajax-off">
                <div class="vc_tta-panel-body">
                    <div class="block-element  product-slider-view  slider filter- js-content-wrap">
                        <div class="list-product-wrap">
                            <div class="wrap-item smart-slider js-content-main clearfix group-navi " data-item="4" data-speed="" data-itemres="" data-prev="" data-next=""  data-pagination="" data-navigation="group-navi">
                                @foreach($product_cate as $pro_cate)
                                <div class="item">  
                                    <div class="product type-product status-publish has-post-thumbnail">
                                        <div class="item-product item-product-grid item-product-style2">
                                            <div class="product-thumb">
                                                <a href="{{URL::to('/san-pham/'. $pro_cate->product_slug)}}" class="product-thumb-link rotate-thumb" >
                                                    <img  src="{{asset('/public/uploads/products/'. $pro_cate->product_image)}}" alt="" />
                                                    <img  src="{{asset('/public/uploads/products/'. $pro_cate->product_image)}}" alt="" />
                                                </a>   
                                                <div class="product-label">
                                                    @if($pro_cate->product_price_sale > 0)
                                                    <span class="sale">Sale</span>
                                                    @endif
                                                </div>  
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title">
                                                    <a title="Laborum Chair" href="{{URL::to('/san-pham/'. $pro_cate->product_slug)}}">{{$pro_cate->product_name}}</a>
                                                </h3>
                                                <div class="product-price price variable">
                                                    @if($pro_cate->product_price_sale > 0)
                                                    <span class="price-sale">{{number_format($pro_cate->product_price)}} đ</span>
                                                    <span class="Price-amount">{{number_format($pro_cate->product_price_sale)}} đ</span>
                                                    @else
                                                    <span class="Price-amount">{{number_format($pro_cate->product_price)}} đ</span>
                                                    @endif
                                                </div>         
                                                <div class="product-extra-link">
                                                    <button class="btn btn-primary ajax_add_to_cart btn-add-cart" data-url="{{URL::to('add-to-cart/'.$pro_cate->product_id)}}"><span>Thêm vào giỏ hàng</span></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()