@extends('admin.dashboard')
@section('title', 'Chi Tiết Đơn Hàng')
@section('title-page', 'Chi Tiết Đơn Hàng')
@section('content')
<!-- content -->
<div class="content ">

	<div class="mb-4">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="{{URL::to('/dashboard')}}">
						<i class="bi bi-bar-chart small me-2"></i> Dashboard
					</a>
				</li>
				<li class="breadcrumb-item">
					<a href="{{URL::to('/orders')}}"> Order </a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Order Detail</li>
			</ol>
		</nav>
	</div>

	<div class="row">
		<div class="col-lg-8 col-md-12">
			<div class="card mb-4">
				<div class="card-body">
					<div class="mb-5 d-flex align-items-center justify-content-between">
						<span>Mã đơn hàng : <span style="text-transform: uppercase;font-weight:600;color: #f1af51;">#{{$data_order->order_code}}</span></span>
						@if($data_order->order_status == 0)
							<span class="badge bg-info">Đang chờ xử lý</span>
						@elseif($data_order->order_status == 1)
							<span class="badge bg-warning">Đang giao hàng</span>
						@elseif($data_order->order_status == 2)
							<span class="badge bg-success">Đã hoàn thành</span>
						@else
							<span class="badge bg-danger">Đã bị huỷ</span>
						@endif
					</div>
					<div class="row mb-5 g-4">
						<div class="col-md-3 col-sm-6">
							<p class="fw-bold">Ngày đặt hàng</p>
							{{$data_order->order_date}}
						</div>
						<div class="col-md-3 col-sm-6">
							<p class="fw-bold">Tên người đặt</p>
							{{$data_order->customer_name}}
						</div>
						<div class="col-md-3 col-sm-6">
							<p class="fw-bold">Email</p>
							{{$data_order->customer_email}}
						</div>
						<div class="col-md-3 col-sm-6">
							<p class="fw-bold">Số điện thoại</p>
							{{$data_order->customer_phone}}
						</div>
					</div>
					<div class="row g-4">
						<div class="col-md-6 col-sm-12">
							<div class="card">
								<div class="card-body address-shipping-content d-flex flex-column gap-3">
									<div class="d-flex justify-content-between">
										<h5 class="mb-0">Địa chỉ giao hàng</h5>
									</div>
									<div class="d-flex align-center"><i class="fal fa-money-check-alt me-2"></i> Phương thức thanh toán: {{$data_order->shipping_method}}</div>
									<div class="d-flex align-center"><i class="fal fa-user me-2"></i>{{$data_order->shipping_name}}</div>
									<div class="d-flex">
										<i class="fal fa-map-marker-alt me-2"></i> 
										<span>{{$data_order->shipping_address}}</span>
									</div>
									<div class="d-flex align-center">
										<i class="bi bi-telephone me-2"></i> {{$data_order->shipping_phone}}
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="card">
								<div class="card-body d-flex flex-column gap-3">
									<div class="d-flex justify-content-between">
										<h5 class="mb-0">Ghi chú đơn hàng</h5>
									</div>
									<div><i class="fal fa-comment-alt-dots me-2"></i> Ghi chú: </div>
									<p>{{$data_order->shipping_notes}}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card widget">
				<h5 class="card-header">Chi tiết đơn hàng</h5>
				<div class="card-body">
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
										<img src="{{asset('public/' .$item->product_image_path)}}" class="rounded" width="60" alt="...">
									</td>
									<td>{{$item->product_name}}</td>
									<td>{{$item->qty}}</td>
									<td>{{number_format($item->product_price)}} ₫</td>
									<td>{{number_format($item->product_price*$item->qty)}} ₫</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-12 mt-4 mt-lg-0">
			<div class="card mb-4">
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
<!-- ./ content -->
@endsection
