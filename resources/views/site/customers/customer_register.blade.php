@extends('index')
@section('layout')
<div class="container">
	<div class="wrap-bread-crumb">
		<div class="bread-crumb"> 
			<div class="bread-crumb-wrap">
				<span><a href="{{URL::to('/')}}"><i class="fad fa-home mr-3"></i> Home</a></span>
				<span>Your Cart</span>       		
			</div>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-md-12">
			<div class="your-cart mb-5">
				<div class="empty_cart">
					<div class="mini-cart-empty">
						<i class="fal fa-shopping-cart title120 empty-icon"></i>
						<h5 class="desc text-uppercase font-semibold">Giỏ hàng đang trống</h5>
						<p class="title14 return-to-shop">
							<a class="button wc-backward" href="{{URL::to('/')}}">Tiếp tục mua sắm</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection()