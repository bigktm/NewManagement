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
						<i class="bi bi-bar-chart small me-2"></i> Tổng quan
					</a>
				</li>
				<li class="breadcrumb-item">
					<a href="{{URL::to('/orders')}}"> Đơn đặt hàng </a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Cập nhật đơn hàng</li>
			</ol>
		</nav>
	</div>

	<div class="row">
		<div class="col-lg-8 col-md-12">
			<div class="card mb-4">
				<div class="card-body">
					<div class="mb-5 d-flex align-items-center justify-content-between">
						<div class="col-md-6 col-xs-12">
							<span>Mã đơn hàng : <span style="text-transform: uppercase;font-weight:600;color: #f1af51;">#{{$data_order->order_code}}</span></span>
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="d-flex align-items-center justify-content-between">
								<form method="POST" action="{{URL::to('update-order/'.$data_order->order_id)}}" class="update_status_order">
									{{ csrf_field() }}
									<select class="form-control" name="order_status">
										<option value="0" {{ $data_order->order_status==0 ? ' selected' : '' }}>Đang chờ xử lý</option>
										<option value="1" {{ $data_order->order_status==1 ? ' selected' : '' }}>Đang giao hàng</option>
										<option value="2" {{ $data_order->order_status==2 ? ' selected' : '' }}>Đã hoàn thành</option>
										<option value="3" {{ $data_order->order_status==3 ? ' selected' : '' }}>Đã bị huỷ</option>
									</select>
									<button type="submit" class="btn btn-primary">Cập nhật</button>
								</form>
							</div>
						</div>
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
								<div class="card-body d-flex flex-column gap-3">
									<div class="d-flex justify-content-between">
										<h5 class="mb-0">Địa chỉ giao hàng</h5>
									</div>
									<div><i class="fal fa-money-check-alt me-2"></i> Phương thức thanh toán: {{$data_order->shipping_method}}</div>
									<div><i class="fal fa-user me-2"></i>{{$data_order->shipping_name}}</div>
									<div><i class="fal fa-map-marker-alt me-2"></i> {{$data_order->shipping_address}}</div>
									<div>
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
										<img src="{{asset('public/uploads/products/'.$item->product_image)}}" class="rounded" width="60" alt="...">
									</td>
									<td>{{$item->product_name}}</td>
									<td>{{$item->product_qty}}</td>
									<td>{{number_format($item->product_price)}} ₫</td>
									<td>{{number_format($item->product_price*$item->product_qty)}} ₫</td>
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
