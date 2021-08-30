@extends('index')
@section('layout')
<div class="container">
	<div class="wrap-bread-crumb">
		<div class="bread-crumb"> 
			<div class="bread-crumb-wrap">
				<span><a href="{{URL::to('/')}}"><i class="fad fa-home mr-3"></i> Home</a></span>
				<span>Shops</span>       		
			</div>
		</div>
	</div>
	<div class="row mt-4">
		@include('site.layout.sidebar')
		<div class="main-wrap-shop content-wrap content-sidebar-right col-md-9 col-sm-8 col-xs-12">
			<div class="title-page clearfix">
				<div class="title-box d-flex justify-between">
					<p>Hiển tại đang có {{$brand_by_id->count()}} sản phẩm</p>
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
			<div class="product-grid-view products-wrap js-content-wrap content-sidebar-right">
				<div class="products row list-product-wrap js-content-main">
					@foreach($brand_by_id as $product)
					<div class="list-col-item list-3-item">
						<div class="item-product item-product-grid item-product-default">
							<div class="product type-product status-publish has-post-thumbnail">
								<div class="item-product item-product-grid item-product-style2">
									<div class="product-thumb">
										<a href="{{URL::to('/san-pham/'.$product->product_slug)}}" class="product-thumb-link rotate-thumb" >
											<img  src="{{asset('/public/'.$product->product_image_path)}}" alt="{{$product->product_name}}" />
											<img  src="{{asset('/public/'.$product->product_image_path)}}" alt="{{$product->product_name}}" />
										</a>  
										<div class="product-label">
											@if($product->product_price_sale > 0)
											<span class="sale">Sale</span>
											@endif
											{{-- <span class="featured">Mới</span> --}}
										</div>      
									</div>
									<div class="product-info">
										<h3 class="title14 product-title">
											<a title="Laborum Chair" href="{{URL::to('/san-pham/'.$product->product_slug)}}">{{$product->product_name}}</a>
										</h3>
										<div class="product-price">
											@if($product->product_price_sale > 0)
											<span class="price-sale">{{number_format($product->product_price)}} đ</span>
											<span class="Price-amount">{{number_format($product->product_price_sale)}} đ</span>
											@else
											<span class="Price-amount">{{number_format($product->product_price)}} đ</span>
											@endif
										</div>   
									</div>

								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="navigation-end">
                {{$brand_by_id->links()}}
            </div>
		</div>
	</div> <!-- close row --> 
</div>
@endsection()