@extends('index')
@section('layout')
<div class="container ">
	<div class="wrap-bread-crumb">
		<div class="bread-crumb"> 
			<div class="bread-crumb-wrap">
				<span><a href="{{URL::to('/')}}">Home</a></span>
				<span><a href="#">Category</a></span>
				<span>Product Detail</span>       		
			</div>
			<div class="product-nav">
				<ul class="list-none">
					<li class="prev">
						<a href="#" rel="prev" title="Previous Product"><i class="fal fa-arrow-left"></i></a>
					</li>

					<li class="next">
						<a href="#" rel="next" title="Next Product"><i class="fal fa-arrow-right"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="product-type-simple">
		<div class="product-detail main-detail-full">
			<div class="row">
				<div class="col-md-7 col-sm-12 col-xs-12">
					<div class="detail-gallery has-gallery">
						<div class="wrap-detail-gallery images zoom-style3">
							<div class="mid woocommerce-product-gallery__image image-lightbox true" data-gallery="">
								<a href="{{asset('/public/frontend/images/15.1.jpg')}}" class="img_url">
									<img width="600" height="686" src="{{asset('/public/frontend/images/15.1.jpg')}}" class="wp-post-image wp-post-image" alt="" srcset="{{asset('/public/frontend/images/15.1.jpg')}}" />
								</a>
							</div>
							<div class="gallery-control true">
								<a href="#" class="prev"><i class="fal fa-arrow-down"></i></a>
								<div class="carousel" data-visible="4" data-vertical="true">
									<ul class="list-none">
										<li data-number="1">
											<a class="active" href="{{asset('/public/frontend/images/15.1.jpg')}}">
												<img width="100" height="114" src="{{asset('/public/frontend/images/15.1.jpg')}}" class="attachment-100x114 size-100x114" alt="" data-src="{{asset('/public/frontend/images/15.1.jpg')}}" data-srcset="{{asset('/public/frontend/images/15.1.jpg')}}" />
											</a>
										</li>
										<li data-number="2">
											<a title="cooking8_3" class="" href="{{asset('/public/frontend/images/3.png')}}">
												<img width="100" height="114" src="{{asset('/public/frontend/images/3.png')}}" class="attachment-100x114 size-100x114" alt="" data-src="{{asset('/public/frontend/images/3.png')}}" data-srcset="{{asset('/public/frontend/images/3.png')}}" />
											</a>
										</li>
										<li data-number="3">
											<a title="cooking8" class="" href="{{asset('/public/frontend/images/1.png')}}">
												<img width="100" height="114" src="{{asset('/public/frontend/images/1.png')}}" class="attachment-100x114 size-100x114" alt="" data-src="{{asset('/public/frontend/images/1.png')}}" data-srcset="{{asset('/public/frontend/images/1.png')}}"/>
											</a>
										</li>
										<li data-number="4">
											<a title="cooking9" class="" href="{{asset('/public/frontend/images/5.png')}}">
												<img width="100" height="114" src="{{asset('/public/frontend/images/5.png')}}" class="attachment-100x114 size-100x114" alt="" data-src="{{asset('/public/frontend/images/5.png')}}" data-srcset="{{asset('/public/frontend/images/5.png')}}" />
											</a>
										</li>                            
									</ul>
								</div>
								<a href="#" class="next"><i class="fal fa-arrow-up"></i></a>
							</div>
						</div>

					</div>
				</div>
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="summary entry-summary detail-info">
						<h2 class="product-title title30 font-bold">Áo khoác mới 2021</h2>
						<div class="product-price"><span>Giá : 450,000</span></div>
						<div class="list-brand">
							<ul class="list-inline-block">
								<li>
									<a href="https://vollemobel.7uptheme.net/brand/brand-d/" class="float">
										<img width="100" height="57" src="https://vollemobel.7uptheme.net/wp-content/uploads/2018/09//brand4-100x57.jpg" class="attachment-100x57 size-100x57" alt="">
									</a>
								</li>
							</ul>
						</div>
						<div class="woocommerce-product-details__short-description">
							<div class="product-desc">
								<p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At lectus urna duis convallis feugiat malesuada elit varius diam hac ad penatibus tellus vivamus suscipit</p>
							</div>
							<form class="cart" action="#" method="post" enctype='multipart/form-data'>
								<div class="size req clearfix mb-3" >

									<p>Tình Trạng: Còn Hàng</p>
									<div class="d-flex justify-content-between align-items-baseline mb-2 mt-3 mt-md-0">
										<label>Size</label>
									</div>
									<div class="list-size">
										<a href="javascript:void(0)" class="text-center d-inline-block ">S</a>
										<a href="javascript:void(0)" class="text-center d-inline-block ">M</a>
										<a href="javascript:void(0)" class="text-center d-inline-block ">L</a>
										<a href="javascript:void(0)" class="text-center d-inline-block ">XL</a>
									</div>
								</div>
								<div class="qty_row">
									<div class="detail-qty info-qty border radius6">
										<a href="#" class="qty-down"><i class="fal fa-minus-square" aria-hidden="true"></i></a>
										<input type="text" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text text qty qty-val" size="4" />
										<a href="#" class="qty-up"><i class="fal fa-plus-square" aria-hidden="true"></i></a>
									</div>
									<button type="submit" name="add-to-cart" value="304" class="single_add_to_cart_button button alt">Thêm vào giỏ hàng</button>
								</div>
							</form>
							<div class="clear"></div>
							<div class="product_meta item-product-meta-info">
								<div class="sku_wrapper">
									<label>Mã sản phẩm:</label> 
									<span class="sku">No-8005-93</span>
								</div>
								<div class="posted_in">
									<label>Danh mục:</label>
									<span class="meta-item-list">
										<a href="#" rel="tag">Áo khoác</a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="product-intro-wrapper productDetails d-flex flex-wrap">
			<div class="col-12 col-md-6">
				<div class="content-border">
					<h4 style="margin:0px;padding:12px 0px 8px;line-height:1.1;font-size:15px;text-transform:uppercase;"><strong>CHÍNH SÁCH ĐỔI TRẢ HÀNG</strong></h4>
					<div class="content" style="margin:0px;">
						<p>- Đổi hàng&nbsp;trong vòng 3 ngày kể từ khi nhận hàng</p>
						<p>- Miễn phí đổi trả nếu lỗi sai sót</p>
					</div>                
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="content-border">
					<h4 style="margin:0px;padding:12px 0px 8px;line-height:1.1;font-size:15px;text-transform:uppercase;"><strong>ƯU ĐÃI MEMBER VIP</strong></h4>
					<div class="content pr-0 pl-0">Vui lòng đăng kí tài khoản mua hàng để được tích điểm làm Member Vip</div>
				</div>
			</div>
		</div>
		<div class="policy-section">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-4">
						<div class="banner-footer-item border d-flex align-items-center mb-3 mb-md-5">
							<i class="fad fa-truck text-primary"></i>
							<div class="banner-footer-item-info">
								<p class="banner-footer-item-title">Miễn phí vận chuyển toàn quốc</p>
								<p class="banner-footer-item-des">Với Đơn Hàng Trên 500.000 đ</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="banner-footer-item border d-flex align-items-center mb-3 mb-md-5">
							<i class="fad fa-user-headset text-danger"></i>
							<div class="banner-footer-item-info">
								<p class="banner-footer-item-title">Hỗ trợ 24/7</p>
								<p class="banner-footer-item-des"><span style="white-space:pre-wrap;">19001009</span></p>                   
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="banner-footer-item border d-flex align-items-center mb-3 mb-md-5">
							<i class="fad fa-hand-holding-box text-success"></i>
							<div class="banner-footer-item-info">
								<p class="banner-footer-item-title">Miễn phí đổi hàng</p>
								<p class="banner-footer-item-des">Trong Vòng 03&nbsp;ngày</p>                    
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row wpb_row mt-4 pt-4 border-top mb150">
			<div class="col-sm-12">
				<div class="content-editor h3-title ">
					<div class="content-info ">
						<h3 class="title24 font-bold text-uppercase mb-4">Sản phẩm liên quan</h3>
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
	</div>
</div>
@endsection()