@extends('index')
@section('layout')
<?php
$total = 0;
$fee = 30000;
?>
<div class="container">
	<div class="wrap-bread-crumb">
		<div class="bread-crumb"> 
			<div class="bread-crumb-wrap">
				<span><a href="{{URL::to('/')}}"><i class="fad fa-home mr-3"></i> Trang chủ</a></span>
				<span>Đơn hàng bạn đã đặt</span>       		
			</div>
		</div>
	</div>
	<div class="row justify-between">
		<div class="col-md-3 col-xs-12">
			<div class="card">
				<div class="card-li">
					<a href="{{URL::to('my-account/orders')}}"><i class="fad fa-bags-shopping"></i> Đơn hàng của bạn</a>
					<a href="{{URL::to('my-account/edit-account')}}"><i class="fad fa-user-alt"></i> Tài khoản của bạn</a>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-xs-12">	
			<p>Đơn hàng <span style="text-transform: uppercase;font-weight:600;color: #f1af51;">#{{$data_order->order_code}}</span> đã được đặt vào {{$data_order->order_date}}.</p>
			<section class="customer-order-details">
				<div class="table-responsive">
					<table class="table table-custom mb-0">
						<thead>
							<tr>
								<th>Hình ảnh</th>
								<th>Tên sản phẩm</th>
								<th>Số lượng</th>
								<th>Giá</th>
								<th>Tổng tiền</th>
							</tr>
						</thead>
						<tbody>
							@foreach($order_items as $item)
							<tr>
								<td>
									<img src="{{asset('public/uploads/products/'.$item->product_image)}}" class="rounded" width="60" alt="...">
								</td>
								<td><a href="{{URL::to('/san-pham/'.$item->product_slug)}}">{{$item->product_name}}</a></td>
								<td>{{$item->qty}}</td>
								<td>{{number_format($item->product_price)}} ₫</td>
								<td>{{number_format($item->product_price*$item->qty)}} ₫</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</section>
			<div class="flex-end d-flex">
				<div class="card mb-4 col-md-6 col-xs-12">
					<div class="card-body">
						<h6 class="card-title mb-4">Tổng tiền</h6>
						<div class="row justify-content-center mb-3">
							<div class="col-4 text-end">Tổng đơn :</div>
							<div class="col-4">{{number_format($data_order->order_total)}} ₫</div>
						</div>
						@if($data_order->order_coupon > 0)
						<div class="row justify-content-center mb-3">
							<div class="col-4 text-end">Giảm giá :</div>
							<div class="col-4">- {{number_format($data_order->order_coupon)}} ₫</div>
						</div>
						@endif
						<div class="row justify-content-center mb-3">
							<div class="col-4 text-end">Phí vận chuyển :</div>
							<div class="col-4">{{number_format($fee)}} ₫</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-4 text-end">
								<strong>Tổng :</strong>
							</div>
							<div class="col-4">
								<strong>{{number_format($data_order->order_total+ $fee)}} ₫</strong>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>
@endsection()