@extends('index')
@section('layout')
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
			@if($order_all->count())
			<div class="table-responsive">
				<table class="table table-custom table-lg mb-0" id="orders">
					<thead>
						<tr>
							<th>Mã đơn hàng</th>
							<th>Ngày đặt</th>
							<th>Tổng tiền</th>
							<th>Tình trạng</th>
							<th class="text-end"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($order_all as $item)
						<tr>
							<td>
								<a href="{{URL::to('my-account/orders/view-order-detail/'.$item->order_id)}}" style="text-transform: uppercase;">#{{$item->order_code}}</a>
							</td>
							<td>{{$item->order_date}}</td>
							<td>{{number_format($item->order_total)}}  ₫</td>
							<td>
								@if($item->order_status == 0)
								<span class="badge bg-info">Đang chờ xử lý</span>
								@elseif($item->order_status == 1)
								<span class="badge bg-warning">Đang giao hàng</span>
								@elseif($item->order_status == 2)
								<span class="badge bg-success">Đã hoàn thành</span>
								@else
								<span class="badge bg-danger">Đã bị huỷ</span>
								@endif
							</td>
							<td class="text-end">
								<a href="{{URL::to('/my-account/orders/view-order-detail/'.$item->order_id)}}">Xem đơn hàng</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="navigation-end">
				{{$order_all->links()}}
			</div>
			@else
			<div class="pd-5 empty-product">
				<i class="fal fa-clipboard-list"></i>
				<p>Chưa có đơn hàng nào</p>
			</div>
			@endif
		</div>
	</div> 
</div>
@endsection()