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
				<?php 
				$content = Cart::content();
				?>
				@if($content->count())
				<div class="view_cart">
					<table class="shop_table shop_table_responsive col-md-7 col-xs-12" cellspacing="0">
						<thead>
							<tr>
								<th class="product-remove">&nbsp;</th>
								<th class="product-thumbnail">&nbsp;</th>
								<th class="product-name">Tên sản phẩm</th>
								<th class="product-price">Giá</th>
								<th class="product-quantity">Số lượng</th>
								<th class="product-subtotal">Tổng tiền</th>
							</tr>
						</thead>
						<tbody>
							@foreach($content as $v_content)
							<tr class="woocommerce-cart-form__cart-item cart_item">
								<td class="product-remove">
									<a href="{{URL::to('/delete-to-cart/'. $v_content->rowId)}}" class="remove" data-product_id="905"><i class="fad fa-trash"></i></a>					
								</td>
								<td class="product-thumbnail">
									<a href="{{URL::to('/san-pham/'. $v_content->options->slug)}}">
										<img width="100" src="{{asset('public/uploads/products/'. $v_content->options->image)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{$v_content->name}}">
									</a>
								</td>

								<td class="product-name" data-title="Product">
									<a href="{{URL::to('/san-pham/'. $v_content->options->slug)}}">{{$v_content->name}}</a>						
								</td>

								<td class="product-subtotal" data-title="Price">
									@if($v_content->options->price_sale > 0)
									<span class="price-sale">{{number_format($v_content->price)}} ₫</span>
									<span class="price-product color">{{number_format($v_content->options->price_sale)}} ₫</span>
									@else
									<span class="price-product color">{{number_format($v_content->price)}} ₫</span>
									@endif  						
								</td>
								<td class="product-quantity" data-title="Quantity">
									<form method="post" action="{{URL::to('update-cart')}}">
										{{ csrf_field() }}
										<div class="detail-qty info-qty border radius6">
											<a href="#" class="qty-down"><i class="fal fa-minus-square" aria-hidden="true"></i></a>
											<input type="text" step="1" min="0" max="" name="quantity_update" value="{{$v_content->qty}}" title="Qty" class="input-text text qty qty-val" size="4">
											<a href="#" class="qty-up"><i class="fal fa-plus-square" aria-hidden="true"></i></a>
											<input type="hidden"  name="cart_rowId" value="{{$v_content->rowId}}">
											<input type="submit" class="hidden">
										</div>
									</form>
								</td>
								<td class="product-subtotal" data-title="Total">
									<?php 
									if($v_content->options->price_sale > 0) {
										$total = $v_content->qty * $v_content->options->price_sale;
									}else {
										$total = $v_content->qty * $v_content->price;
									}
									?>
									<span class="color"><?php echo number_format($total); ?> ₫</span>				
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<div class="cart-collaterals col-md-5 col-xs-12 mt-5">
						<div class="cart_totals ">
							<h2>Tổng tiền</h2>
							<table cellspacing="0" class="shop_table shop_table_responsive">
								<tbody>
									<tr>
										<td colspan="2">
											<div class="coupon d-flex justify-between">
												<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Nhập mã giảm giá"> 
												<button type="submit" class="button_coupon" name="apply_coupon" value="Áp Dụng">Áp Dụng</button>
											</div>
										</td>
									</tr>
									<tr class="cart-subtotal">
										<th>Tạm tính</th>
										<td data-title="Subtotal">
											<span class="price-product">{{Cart::subtotal(0)}} ₫</span>
										</td>
									</tr>
									@if(Cart::tax() > 0)
									<tr class="cart-subtotal">
										<th>Thuế</th>
										<td data-title="Subtotal">
											<span class="price-product">{{Cart::tax()}}</span>
										</td>
									</tr>
									@endif
									<tr class="order-total">
										<th>Tổng</th>
										<td data-title="Total">
											<strong><span class="price-product">{{Cart::total(0)}} ₫</span></strong>
										</td>
									</tr>
								</tbody>
							</table>
							<div class="wc-proceed-to-checkout">
								<a href="{{URL::to('/checkout')}}" class="checkout-button button alt wc-forward">
								Tiếp tục thanh toán</a>
							</div>
						</div>
					</div>
				</div>
				@else
				<div class="empty_cart">
					<div class="mini-cart-empty">
						<i class="fal fa-shopping-cart title120 empty-icon"></i>
						<h5 class="desc text-uppercase font-semibold">Giỏ hàng đang trống</h5>
						<p class="title14 return-to-shop">
							<a class="button wc-backward" href="{{URL::to('/')}}">Tiếp tục mua sắm</a>
						</p>
					</div>
				</div>
				@endif
			</div>
		</div>
	</div>
</div>
@endsection()