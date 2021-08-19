@extends('index')
@section('layout')
<div class="container">
	<div class="wrap-bread-crumb">
		<div class="bread-crumb"> 
			<div class="bread-crumb-wrap">
				<span><a href="{{URL::to('/')}}"><i class="fad fa-home mr-3"></i> Home</a></span>
				<span>Giỏ hàng của bạn</span>       		
			</div>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-md-12">
			<div class="your-cart mb-5">
				@if(count($cart) > 0)
				<div class="view_cart d-flex justify-between">
					<div class="cart-content col-md-7 col-xs-12">
						<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents col-xs-12" cellspacing="0">
							<thead>
							</thead>
							<tbody>
								<form action="{{url('update-cart')}}" method="POST">
									{{ csrf_field() }}

									@php 
									$total = 0;
									@endphp

									@foreach($cart as $cartItem)

									<tr class="woocommerce-cart-form__cart-item cart_item">
										<td class="item-img">
											<a href="{{URL::to('/san-pham/'. $cartItem['product_slug'])}}">
												<img width="150" src="{{asset('public/uploads/products/'. $cartItem['product_image'])}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="{{$cartItem['product_name']}}">
											</a>			
										</td>
										<td class="product-right">
											<div class="right">
												<div class="item-info">
													<a href="{{URL::to('/san-pham/'. $cartItem['product_slug'])}}"><h3>{{$cartItem['product_name']}}</h3></a>
												</div>
												<div class="item-price">
													<p>
														@if($cartItem['product_price_sale'] > 0)
														<span class="price-sale">{{number_format($cartItem['product_price'])}} ₫</span>
														<span class="price-product color">{{number_format($cartItem['product_price_sale'])}} ₫</span>
														@else
														<span class="price-product color">{{number_format($cartItem['product_price'])}} ₫</span>
														@endif  						
													</p>
												</div>
												<div class="d-flex justify-between align-center">
													<div class="item-quan">
														<div class="detail-qty info-qty border radius6">
															<a href="#" class="qty-down"><i class="fal fa-minus-square" aria-hidden="true"></i></a>
															<input type="text" step="1" min="0" max="" name="quantity_update[{{$cartItem['session_id']}}]" value="{{$cartItem['qty']}}" title="Qty" class="input-text text qty qty-val" size="4">
															<a href="#" class="qty-up"><i class="fal fa-plus-square" aria-hidden="true"></i></a>
														</div>
													</div>
													<div class="item-total-price">
														<div class="price">
															<span class="line-item-total">
																<?php
																if($cartItem['product_price_sale'] > 0) {
																	$subtotal = $cartItem['qty'] * $cartItem['product_price_sale'];
																} 
																else {
																	$subtotal = $cartItem['qty'] * $cartItem['product_price'];
																}
																?><?php echo number_format($subtotal); ?> ₫
															</span>
														</div>
													</div>
												</div>
												<div class="item-remove">
													<div class="remove">
														<a href="{{URL::to('/remove-cart-item/'.$cartItem['session_id'])}}" class="remove"><i class="fad fa-trash"></i></a>			
													</div>
												</div>
											</div>
										</td>
									</tr>
									@php 
									$total += $subtotal;
									@endphp
									@endforeach
									<tr>
										<td colspan="6">
											<div  class="actions">
												<div class="update-cart">
													<button type="submit" class="button-update-cart" name="update_cart" value="Update cart"><i class="fal fa-repeat"></i>  Cập nhật giỏ hàng</button>
												</div>	
											</div>
										</td>
									</tr>
								</form>
							</tbody>
						</table>
					</div>
					<div class="cart-collaterals col-md-4 col-xs-12">
						<div class="cart_totals ">
							<h2>Tổng tiền</h2>
							<table cellspacing="0" class="shop_table shop_table_responsive">
								<tbody>
									<tr class="cart-subtotal">
										<th>Tạm tính</th>
										<td data-title="Subtotal">
											<span class="price-product">{{ number_format($total) }} ₫</span>
										</td>
									</tr>
									
									<tr class="cart-subtotal">
										<th>Phí vận chuyển</th>
										<td data-title="Subtotal">
											<span class="price-product">0</span>
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
								@if(Session::get('customer_id'))
								<a href="{{URL::to('/checkout')}}" class="checkout-button button alt wc-forward">
								Tiếp tục thanh toán</a>
								@else
								<a href="{{URL::to('/customer/login')}}" class="checkout-button button alt wc-forward">
								Tiếp tục thanh toán</a>
								@endif
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