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
				<form class="woocommerce-cart-form" action="" method="post">
					<table class="shop_table shop_table_responsive" cellspacing="0">
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
							<tr class="woocommerce-cart-form__cart-item cart_item">
								<td class="product-remove">
									<a href="#" class="remove" data-product_id="905"><i class="fad fa-trash"></i></a>					
								</td>
								<td class="product-thumbnail">
									<a href="{{URL::to('/product/id=123')}}"><img width="300" height="300" src="{{asset('public/frontend/images/3.png')}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""></a>
								</td>

								<td class="product-name" data-title="Product">
									<a href="{{URL::to('/product/id=123')}}">Áo thun trơn nam </a>						
								</td>

								<td class="product-subtotal" data-title="Price">
									<span class="price-product">450,000</span>						
								</td>
								<td class="product-quantity" data-title="Quantity">
									<div class="detail-qty info-qty border radius6">
										<a href="#" class="qty-down"><i class="fal fa-minus-square" aria-hidden="true"></i></a>
										<input type="text" step="1" min="0" max="" name="cart[f57a2f557b098c43f11ab969efe1504b][qty]" value="1" title="Qty" class="input-text text qty qty-val" size="4">
										<a href="#" class="qty-up"><i class="fal fa-plus-square" aria-hidden="true"></i></a>
									</div>
								</td>
								<td class="product-subtotal" data-title="Total">
									<span class="price-product">450,000</span>						
								</td>
							</tr>
							<tr>
								<td colspan="6">
									<div  class="d-flex justify-between table-actions"">
										<div class="coupon">
											<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Nhập mã giảm giá"> 
											<button type="submit" class="button_coupon" name="apply_coupon" value="Áp Dụng">Áp Dụng</button>
										</div>
										<div class="pull-right">
											<button type="submit" class="button" name="update_cart" disabled="">Cập nhật giỏ hàng</button>
										</div>	
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
				<div class="cart-collaterals mt-4">
					<div class="cart_totals ">
						<h2>Tổng tiền</h2>
						<table cellspacing="0" class="shop_table shop_table_responsive">
							<tbody>
								<tr class="cart-subtotal">
									<th>Subtotal</th>
									<td data-title="Subtotal">
										<span class="price-product">450,000</span>
									</td>
								</tr>
								<tr class="cart-subtotal">
									<th>Mã giảm giá : HTStore</th>
									<td data-title="Subtotal">
										<span class="price-product"> - 45,000</span>
									</td>
								</tr>
								<tr class="order-total">
									<th>Tổng</th>
									<td data-title="Total">
										<strong><span class="price-product">405,000 đ</span></strong>
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
		</div>
	</div>
</div>
@endsection()