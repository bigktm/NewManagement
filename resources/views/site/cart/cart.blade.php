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
				@if(count($cart) > 0)
				<div class="view_cart">
					<form action="{{url('update-cart')}}" method="POST">
						{{ csrf_field() }}
						<div class="cart-content">
							<table class="shop_table shop_table_responsive col-xs-12" cellspacing="0">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name" style="width: 35%">Tên sản phẩm</th>
										<th class="product-price">Giá</th>
										<th class="product-quantity" style="width: 15%">Số lượng</th>
										<th class="product-subtotal">Tổng tiền</th>
									</tr>
								</thead>
								<tbody>
									@php 
									$total = 0;
									@endphp

									@foreach($cart as $cartItem)

									<tr class="woocommerce-cart-form__cart-item cart_item">
										<td class="product-remove">
											<a href="{{URL::to('/remove-cart-item/'.$cartItem['session_id'])}}" class="remove"><i class="fad fa-trash"></i></a>					
										</td>
										<td class="product-thumbnail">
											<a href="{{URL::to('/san-pham/'. $cartItem['product_slug'])}}">
												<img width="100" src="{{asset('public/uploads/products/'. $cartItem['product_image'])}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{$cartItem['product_name']}}">
											</a>
										</td>

										<td class="product-name" data-title="Product">
											<a href="{{URL::to('/san-pham/'. $cartItem['product_slug'])}}">{{$cartItem['product_name']}}</a>						
										</td>

										<td class="product-subtotal" data-title="Price">
											@if($cartItem['product_price_sale'] > 0)
											<span class="price-sale">{{number_format($cartItem['product_price'])}} ₫</span>
											<span class="price-product color">{{number_format($cartItem['product_price_sale'])}} ₫</span>
											@else
											<span class="price-product color">{{number_format($cartItem['product_price'])}} ₫</span>
											@endif  						
										</td>
										<td class="product-quantity" data-title="Quantity">
											<div class="detail-qty info-qty border radius6">
												<a href="#" class="qty-down"><i class="fal fa-minus-square" aria-hidden="true"></i></a>
												<input type="text" step="1" min="0" max="" name="quantity_update[{{$cartItem['session_id']}}]" value="{{$cartItem['qty']}}" title="Qty" class="input-text text qty qty-val" size="4">
												<a href="#" class="qty-up"><i class="fal fa-plus-square" aria-hidden="true"></i></a>
											</div>
										</td>
										<td class="product-subtotal" data-title="Total">
											<?php
											if($cartItem['product_price_sale'] > 0) {
												$subtotal = $cartItem['qty'] * $cartItem['product_price_sale'];
											} 
											else {
												$subtotal = $cartItem['qty'] * $cartItem['product_price'];
											}
											?>
											<span class="color"><?php echo number_format($subtotal); ?> ₫</span>				
										</td>
									</tr>
									@php 
									$total += $subtotal;
									@endphp
									@endforeach
									<tr>
										<td colspan="6">
											<div  class="actions">
												<div class="coupon">
													<div class="coupon d-flex justify-between">
														<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Nhập mã giảm giá"> 
														<i class="fal fa-percentage"></i>
														<button type="submit" class="button_coupon" name="apply_coupon" value="Áp Dụng">Áp Dụng</button>
													</div>
												</div>
												<div class="update-cart">
													<button type="submit" class="button-update-cart" name="update_cart" value="Update cart"><i class="fal fa-repeat"></i>  Update cart</button>
												</div>	
											</div>	
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</form>
					<div class="cart-collaterals col-md-4 col-xs-12 mt-5">
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
											<span class="price-product">{{ number_format($total) }} ₫</span>
										</td>
									</tr>
									
									<tr class="cart-subtotal">
										<th>Phí vận chuyển</th>
										<td data-title="Subtotal">
											<span class="price-product"></span>
										</td>
									</tr>
									
									<tr class="order-total">
										<th>Tổng</th>
										<td data-title="Total">
											<strong><span class="price-product">{{ number_format($total) }} ₫</span></strong>
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