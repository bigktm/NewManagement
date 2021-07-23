@extends('index')
@section('layout')
<div class="container">
	<div class="row mt-4">
		<div class="col-md-3 col-sm-4 col-xs-12">
			<div class="sidebar sidebar-right">
				<div id="s7upf_category_list-2" class="sidebar-widget widget widget_s7upf_category_list">
					<h3 class="widget-title">Danh Mục Sản Phẩm</h3>
					<ul class="list-none">	
						<li class="cat-item cat-item-38">
							<span class="show_btn fal fa-chevron-down"></span>
							<a href="#">Quần áo nam</a> <span>(4)</span>
							<ul class="children">
								<li class="cat-item cat-item-53">
									<a href="#">Áo Polo</a> <span>(8)</span>
								</li>
								<li class="cat-item cat-item-58">
									<a href="#">Áo Thun</a> <span>(20)</span>
								</li>
								<li class="cat-item cat-item-63">
									<a href="#">Áo Sơ Mi</a> <span>(12)</span>
								</li>
								<li class="cat-item cat-item-63">
									<a href="#">Quần Âu</a> <span>(2)</span>
								</li>
								<li class="cat-item cat-item-63">
									<a href="#">Quần Jeans</a> <span>(12)</span>
								</li>
							</ul>
						</li>
						<li class="cat-item cat-item-38">
							<span class="show_btn fal fa-chevron-down"></span>
							<a href="#">Quần áo nữ</a> <span>(4)</span>
							<ul class="children">
								<li class="cat-item cat-item-53">
									<a href="#">Áo Polo</a> <span>(8)</span>
								</li>
								<li class="cat-item cat-item-58">
									<a href="#">Áo Thun</a> <span>(20)</span>
								</li>
								<li class="cat-item cat-item-63">
									<a href="#">Đồ ngủ</a> <span>(12)</span>
								</li>
								<li class="cat-item cat-item-63">
									<a href="#">Đầm thiết kế</a> <span>(2)</span>
								</li>
								<li class="cat-item cat-item-63">
									<a href="#">Váy</a> <span>(12)</span>
								</li>
							</ul>
						</li>
						<li class="cat-item cat-item-38">
							<span class="show_btn fal fa-chevron-down"></span>
							<a href="#">Phụ kiện</a> <span>(4)</span>
							<ul class="children">
								<li class="cat-item cat-item-53">
									<a href="#">Đồng hồ</a> <span>(8)</span>
								</li>
								<li class="cat-item cat-item-53">
									<a href="#">Giày dép nam</a> <span>(8)</span>
								</li>
								<li class="cat-item cat-item-58">
									<a href="#">Ví da</a> <span>(20)</span>
								</li>
							</ul>
						</li>
						<li class="cat-item cat-item-38">
							<a href="#">Combo</a> 
						</li>
					</ul>
				</div>
				<div id="-1" class="sidebar-widget widget">
					<h3 class="widget-title">Màu sắc</h3>
					<ul class="tawcvs-swatches attribute-type-color">
						<li>
							<a class="" title="Black" href="#">
								<span class="swatch swatch-color swatch-black " style="background-color:#000000"></span>
								<span>Đen</span>
							</a>
							<span class="silver">(2)</span>
						</li>
						<li>
							<a class="" title="Grey" href="#">
								<span class="swatch swatch-color swatch-grey " style="background-color:#b0b0b0"></span>
								<span>Xám</span>
							</a>
							<span class="silver">(2)</span>
						</li>
						<li>
							<a class="" title="Red" href="#">
								<span class="swatch swatch-color swatch-red " style="background-color:#dd3333"></span>
								<span>Đỏ</span>
							</a>
							<span class="silver">(2)</span>
						</li>
						<li>
							<a class="" title="Valli" href="#">
								<span class="swatch swatch-color swatch-valli " style="background-color:#ede1af"></span>
								<span>Kem</span>
							</a>
							<span class="silver">(2)</span>
						</li>
						<li>
							<a class="" title="White" href="#">
								<span class="swatch swatch-color swatch-white " style="background-color:#ffffff"></span>
								<span>Trắng</span>
							</a>
							<span class="silver">(2)</span>
						</li>                            
					</ul>
				</div>
				<div id="" class="sidebar-widget widget">
					<h3 class="widget-title">Lọc Size</h3>                            
					<ul class="tawcvs-swatches attribute-type-label">
						<li>
							<a title="L" data-value="l" href="#">XL</a> <span class="count silver">(2)</span>
						</li>
						<li>
							<a title="L" data-value="l" href="#">L</a> <span class="count silver">(2)</span>
						</li>
						<li>
							<a title="M" data-value="m" href="#">M</a> <span class="count silver">(2)</span>
						</li>
						<li>
							<a title="S" data-value="s" href="#">S</a> <span class="count silver">(2)</span>
						</li>                                
					</ul>
				</div>		
			</div>
		</div>
		<div class="main-wrap-shop content-wrap content-sidebar-right col-md-9 col-sm-8 col-xs-12">
			<div class="title-page clearfix">
				<div class="title-box d-flex justify-between">
					<p>Hiển thị 1–12 of 40 kết quả</p>
					<ul class="sort-pagi-bar list-inline-block pull-right">
						<li>
							<div class="sort-by flex-middle">
								<span class="black">Sắp xếp:</span>
								<div class="select-box inline-block">
									<div class="dropdown-box show-by show-order">
										<a href="#" class="dropdown-link">
											<span class="gray set-orderby">Mới nhất</span>
										</a>
										<ul class="dropdown-list list-none">
											<li><a data-orderby="new" class="load-shop-ajax active" href="#">Mới nhất</a></li>
											<li><a data-orderby="price-down" class="load-shop-ajax" href="#">Giá giảm dần</a></li>
											<li><a data-orderby="price-up" class="load-shop-ajax" href="#">Giá tăng dần</a></li>          
										</ul>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="product-grid-view products-wrap js-content-wrap">
				<div class="products row list-product-wrap js-content-main">
					<div class="list-col-item list-3-item">
						<div class="item-product item-product-grid item-product-default">
							<div class="product type-product status-publish has-post-thumbnail">
								<div class="item-product item-product-grid item-product-style2">
									<div class="product-thumb">
										<a href="{{URL::to('/product/id=123')}}" class="product-thumb-link rotate-thumb" >
											<img  src="{{asset('/public/frontend/images/5.png')}}" alt="" />
											<img  src="{{asset('/public/frontend/images/2.png')}}" alt="" />
										</a>  
										<div class="product-label">
											<span class="sale">-13%</span>
											<span class="featured">featured</span>
										</div>      
									</div>
									<div class="product-info">
										<h3 class="title14 product-title">
											<a title="Laborum Chair" href="{{URL::to('/product/id=123')}}">Áo thun nam 2021</a>
										</h3>
										<div class="product-price">
											<span class="price-sale">650,000 đ</span>
											<span class="Price-amount">450,000 đ</span>
										</div>   
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="list-col-item list-3-item">
						<div class="item-product item-product-grid item-product-default">
							<div class="product type-product status-publish has-post-thumbnail">
								<div class="item-product item-product-grid item-product-style2">
									<div class="product-thumb">
										<a href="{{URL::to('/product/id=123')}}" class="product-thumb-link rotate-thumb" >
											<img  src="{{asset('/public/frontend/images/2.png')}}" alt="" />
											<img  src="{{asset('/public/frontend/images/3.png')}}" alt="" />
										</a>       
									</div>
									<div class="product-info">
										<h3 class="title14 product-title">
											<a title="Laborum Chair" href="{{URL::to('/product/id=123')}}">Áo thun nam 2021</a>
										</h3>
										<div class="product-price">
											<span class="Price-amount">450,000 đ</span>
										</div>   
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="list-col-item list-3-item">
						<div class="item-product item-product-grid item-product-default">
							<div class="product type-product status-publish has-post-thumbnail">
								<div class="item-product item-product-grid item-product-style2">
									<div class="product-thumb">
										<a href="{{URL::to('/product/id=123')}}" class="product-thumb-link rotate-thumb" >
											<img  src="{{asset('/public/frontend/images/2.png')}}" alt="" />
											<img  src="{{asset('/public/frontend/images/3.png')}}" alt="" />
										</a>       
									</div>
									<div class="product-info">
										<h3 class="title14 product-title">
											<a title="Laborum Chair" href="{{URL::to('/product/id=123')}}">Áo thun nam 2021</a>
										</h3>
										<div class="product-price">
											<span class="Price-amount">450,000 đ</span>
										</div>   
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="list-col-item list-3-item">
						<div class="item-product item-product-grid item-product-default">
							<div class="product type-product status-publish has-post-thumbnail">
								<div class="item-product item-product-grid item-product-style2">
									<div class="product-thumb">
										<a href="{{URL::to('/product/id=123')}}" class="product-thumb-link rotate-thumb" >
											<img  src="{{asset('/public/frontend/images/2.png')}}" alt="" />
											<img  src="{{asset('/public/frontend/images/3.png')}}" alt="" />
										</a>       
									</div>
									<div class="product-info">
										<h3 class="title14 product-title">
											<a title="Laborum Chair" href="{{URL::to('/product/id=123')}}">Áo thun nam 2021</a>
										</h3>
										<div class="product-price">
											<span class="Price-amount">450,000 đ</span>
										</div>   
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="list-col-item list-3-item">
						<div class="item-product item-product-grid item-product-default">
							<div class="product type-product status-publish has-post-thumbnail">
								<div class="item-product item-product-grid item-product-style2">
									<div class="product-thumb">
										<a href="{{URL::to('/product/id=123')}}" class="product-thumb-link rotate-thumb" >
											<img  src="{{asset('/public/frontend/images/2.png')}}" alt="" />
											<img  src="{{asset('/public/frontend/images/3.png')}}" alt="" />
										</a>       
									</div>
									<div class="product-info">
										<h3 class="title14 product-title">
											<a title="Laborum Chair" href="{{URL::to('/product/id=123')}}">Áo thun nam 2021</a>
										</h3>
										<div class="product-price">
											<span class="Price-amount">450,000 đ</span>
										</div>   
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="list-col-item list-3-item">
						<div class="item-product item-product-grid item-product-default">
							<div class="product type-product status-publish has-post-thumbnail">
								<div class="item-product item-product-grid item-product-style2">
									<div class="product-thumb">
										<a href="{{URL::to('/product/id=123')}}" class="product-thumb-link rotate-thumb" >
											<img  src="{{asset('/public/frontend/images/2.png')}}" alt="" />
											<img  src="{{asset('/public/frontend/images/3.png')}}" alt="" />
										</a>       
									</div>
									<div class="product-info">
										<h3 class="title14 product-title">
											<a title="Laborum Chair" href="{{URL::to('/product/id=123')}}">Áo thun nam 2021</a>
										</h3>
										<div class="product-price">
											<span class="Price-amount">450,000 đ</span>
										</div>   
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="list-col-item list-3-item">
						<div class="item-product item-product-grid item-product-default">
							<div class="product type-product status-publish has-post-thumbnail">
								<div class="item-product item-product-grid item-product-style2">
									<div class="product-thumb">
										<a href="{{URL::to('/product/id=123')}}" class="product-thumb-link rotate-thumb" >
											<img  src="{{asset('/public/frontend/images/2.png')}}" alt="" />
											<img  src="{{asset('/public/frontend/images/3.png')}}" alt="" />
										</a>       
									</div>
									<div class="product-info">
										<h3 class="title14 product-title">
											<a title="Laborum Chair" href="{{URL::to('/product/id=123')}}">Áo thun nam 2021</a>
										</h3>
										<div class="product-price">
											<span class="Price-amount">450,000 đ</span>
										</div>   
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="list-col-item list-3-item">
						<div class="item-product item-product-grid item-product-default">
							<div class="product type-product status-publish has-post-thumbnail">
								<div class="item-product item-product-grid item-product-style2">
									<div class="product-thumb">
										<a href="{{URL::to('/product/id=123')}}" class="product-thumb-link rotate-thumb" >
											<img  src="{{asset('/public/frontend/images/2.png')}}" alt="" />
											<img  src="{{asset('/public/frontend/images/3.png')}}" alt="" />
										</a>       
									</div>
									<div class="product-info">
										<h3 class="title14 product-title">
											<a title="Laborum Chair" href="{{URL::to('/product/id=123')}}">Áo thun nam 2021</a>
										</h3>
										<div class="product-price">
											<span class="Price-amount">450,000 đ</span>
										</div>   
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="list-col-item list-3-item">
						<div class="item-product item-product-grid item-product-default">
							<div class="product type-product status-publish has-post-thumbnail">
								<div class="item-product item-product-grid item-product-style2">
									<div class="product-thumb">
										<a href="{{URL::to('/product/id=123')}}" class="product-thumb-link rotate-thumb" >
											<img  src="{{asset('/public/frontend/images/2.png')}}" alt="" />
											<img  src="{{asset('/public/frontend/images/3.png')}}" alt="" />
										</a>       
									</div>
									<div class="product-info">
										<h3 class="title14 product-title">
											<a title="Laborum Chair" href="{{URL::to('/product/id=123')}}">Áo thun nam 2021</a>
										</h3>
										<div class="product-price">
											<span class="Price-amount">450,000 đ</span>
										</div>   
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="list-col-item list-3-item">
						<div class="item-product item-product-grid item-product-default">
							<div class="product type-product status-publish has-post-thumbnail">
								<div class="item-product item-product-grid item-product-style2">
									<div class="product-thumb">
										<a href="{{URL::to('/product/id=123')}}" class="product-thumb-link rotate-thumb" >
											<img  src="{{asset('/public/frontend/images/2.png')}}" alt="" />
											<img  src="{{asset('/public/frontend/images/3.png')}}" alt="" />
										</a>       
									</div>
									<div class="product-info">
										<h3 class="title14 product-title">
											<a title="Laborum Chair" href="{{URL::to('/product/id=123')}}">Áo thun nam 2021</a>
										</h3>
										<div class="product-price">
											<span class="Price-amount">450,000 đ</span>
										</div>   
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="list-col-item list-3-item">
						<div class="item-product item-product-grid item-product-default">
							<div class="product type-product status-publish has-post-thumbnail">
								<div class="item-product item-product-grid item-product-style2">
									<div class="product-thumb">
										<a href="{{URL::to('/product/id=123')}}" class="product-thumb-link rotate-thumb" >
											<img  src="{{asset('/public/frontend/images/2.png')}}" alt="" />
											<img  src="{{asset('/public/frontend/images/3.png')}}" alt="" />
										</a>       
									</div>
									<div class="product-info">
										<h3 class="title14 product-title">
											<a title="Laborum Chair" href="{{URL::to('/product/id=123')}}">Áo thun nam 2021</a>
										</h3>
										<div class="product-price">
											<span class="Price-amount">450,000 đ</span>
										</div>   
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="list-col-item list-3-item">
						<div class="item-product item-product-grid item-product-default">
							<div class="product type-product status-publish has-post-thumbnail">
								<div class="item-product item-product-grid item-product-style2">
									<div class="product-thumb">
										<a href="{{URL::to('/product/id=123')}}" class="product-thumb-link rotate-thumb" >
											<img  src="{{asset('/public/frontend/images/2.png')}}" alt="" />
											<img  src="{{asset('/public/frontend/images/3.png')}}" alt="" />
										</a>       
									</div>
									<div class="product-info">
										<h3 class="title14 product-title">
											<a title="Laborum Chair" href="{{URL::to('/product/id=123')}}">Áo thun nam 2021</a>
										</h3>
										<div class="product-price">
											<span class="Price-amount">450,000 đ</span>
										</div>   
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- close row --> 
</div>
@endsection()