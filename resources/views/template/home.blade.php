@extends('index')
@section('layout')
<style>
    .header-page {
        position: absolute;
    }
</style>
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
                    <h3 class="title24 font-bold text-uppercase white">Thời trang nam</h3>
                    <p class="desc white">Bộ sưu tập thu đông</p>
                    <p><a class="title14 text-uppercase more white" href="#">Xem thêm</a></p>
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
                    <h3 class="title24 font-bold text-uppercase white">Thời trang nữ</h3>
                    <p class="desc white">Mẫu mã theo xu hướng</p>
                    <p><a class="title14 text-uppercase more white" href="#">Xem thêm</a></p>
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
                        <span class="found_posts hidden">23 <span class="lb">items</span></span>
                        <div class="list-product-wrap">
                            <div class="wrap-item smart-slider js-content-main clearfix group-navi " data-item="4" data-speed="" data-itemres="" data-prev="" data-next=""  data-pagination="" data-navigation="group-navi">
                                <div class="item">  
                                    <div class="product type-product status-publish has-post-thumbnail">
                                        <div class="item-product item-product-grid item-product-style2">
                                            <div class="product-thumb">
                                                <a href="{{URL::to('/product/id=123')}}">
                                                    <img width="252" height="288" src="{{asset('/public/frontend/images/15.1.jpg')}}" class="attachment-252x288 size-252x288 wp-post-image" alt="" />
                                                </a>        
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title">
                                                    <a title="Laborum Chair" href="{{URL::to('/product/id=123')}}">Áo khoác mới 2021</a>
                                                </h3>
                                                <div class="product-price price variable">
                                                    <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span>
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
                                                    <img width="252" height="288" src="{{asset('/public/frontend/images/5.1.jpg')}}" class="attachment-252x288 size-252x288 wp-post-image" alt="" />
                                                </a>        
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title">
                                                    <a title="Laborum Chair" href="#">Otis T-Shirt</a>
                                                </h3>
                                                <div class="product-price price variable">
                                                    <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span>
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
                                                    <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span>
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
                                                    <img width="252" height="288" src="{{asset('/public/frontend/images/3.png')}}" alt="" />
                                                </a>        
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title">
                                                    <a title="Laborum Chair" href="#">Laborum Chair</a>
                                                </h3>
                                                <div class="product-price price variable">
                                                    <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span>
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
                                                    <img width="252" height="288" src="{{asset('/public/frontend/images/5.png')}}" alt="" />
                                                </a>        
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title">
                                                    <a title="Laborum Chair" href="#">Laborum Chair</a>
                                                </h3>
                                                <div class="product-price price variable">
                                                    <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span>
                                                </div>         
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
                    <h3 class="title24 font-bold text-uppercase mb-4">Sản phẩm bán chạy</h3>
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
                                                    <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span>
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
                                                    <img width="252" height="288" src="{{asset('/public/frontend/images/5.1.jpg')}}" class="attachment-252x288 size-252x288 wp-post-image" alt="" />
                                                </a>        
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title">
                                                    <a title="Laborum Chair" href="#">Otis T-Shirt</a>
                                                </h3>
                                                <div class="product-price price variable">
                                                    <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span>
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
                                                    <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span>
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
                                                    <img width="252" height="288" src="{{asset('/public/frontend/images/3.png')}}" alt="" />
                                                </a>        
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title">
                                                    <a title="Laborum Chair" href="#">Laborum Chair</a>
                                                </h3>
                                                <div class="product-price price variable">
                                                    <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span>
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
                                                    <img width="252" height="288" src="{{asset('/public/frontend/images/5.png')}}" alt="" />
                                                </a>        
                                            </div>
                                            <div class="product-info">
                                                <h3 class="title14 product-title">
                                                    <a title="Laborum Chair" href="#">Laborum Chair</a>
                                                </h3>
                                                <div class="product-price price variable">
                                                    <span class="woocommerce-Price-amount amount">450,000</span><span class="woocommerce-Price-currencySymbol">đ</span>
                                                </div>         
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
@endsection()