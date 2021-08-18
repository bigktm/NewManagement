@extends('index')
@section('layout')

<?php
$total = 0;
$fee = 30000;
?>
<div class="container">
	<div class="main-content mt-5">
		<div class="woocommerce">
			<div class="woocommerce-checkout-thankyou">
				<h2>Cảm ơn bạn. Đơn hàng của bạn đã được đặt thành công.</h2>
				<ul class="order_details order_summary">
					<li class="order">
						Mã đơn hàng:<strong style="text-transform: uppercase;">{{$order_info->order_code}}</strong>
					</li>
					<li class="date">
						Ngày đặt hàng:<strong>{{$order_info->order_date}}</strong>
					</li>
					<li class="total">
						Tổng tiền:<strong>{{number_format($order_info->order_total + $fee)}} ₫</strong>
					</li>
					<li class="method">
						Phương thức thanh toán:	<strong>{{$order_info->shipping_method}}</strong>
					</li>
				</ul>
				<section class="woocommerce-order-details">
					<h2>Chi tiết đơn hàng</h2>
					<table class="shop_table order_details">
						<thead>
							<tr>
								<th>Sản phẩm</th>
								<th>Tổng tiền</th>
							</tr>
						</thead>
						<tbody>
							@foreach($order_detail as $val)
							<tr>
								<td>
									<span>{{$val->product_name}}<span>
									<strong class="product-quantity">× {{$val->product_qty}}</strong>	
								</td>
								<td class="woocommerce-table__product-total product-total">
									<span>{{number_format($val->product_price)}} ₫</span>
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th scope="row">Tạm tính:</th>
								<td><span>{{number_format($order_info->order_total)}} ₫</span></td>
							</tr>
							<tr>
								<th scope="row">Phí giao hàng:</th>
								<td><span>{{number_format($fee)}} ₫</span></td>
							</tr>
							<tr>
								<th scope="row">Phương thức thanh toán:</th>
								<td>{{$order_info->shipping_method}}</td>
							</tr>
							<tr>
								<th scope="row">Tổng tiền:</th>
								<td><span>{{number_format($order_info->order_total + $fee)}} ₫</span></td>
							</tr>
						</tfoot>
					</table>
				</section>
			</div>
			<div class="mt-5"><a href="{{URL::to('/')}}"><i class="fal fa-angle-left"></i> Trở về trang chủ</a></div>
		</div>
	</div>
</div>
@endsection