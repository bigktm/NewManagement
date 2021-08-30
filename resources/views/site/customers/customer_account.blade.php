@extends('index')
@section('layout')
<div class="container">
	<div class="wrap-bread-crumb">
		<div class="bread-crumb"> 
			<div class="bread-crumb-wrap">
				<span><a href="{{URL::to('/')}}"><i class="fad fa-home mr-3"></i> Trang chủ</a></span>
				<span>Đăng ký tài khoản</span>       		
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

		<div class="col-md-8">
			<div class="customer_wrapper row">	
				<div id="account_section__register" class="account_section account_section__register col-md-12">
					<div class="container-sm  px-0">
						@php
						$message = Session::get('message');
						$message_error = Session::get('message_error');
						if($message_error){
							echo '<div class="alert alert-danger"><span class="text-alert">'.$message_error.'</span></div>';
							Session::put('message_error',null);
						}elseif($message) {
							echo '<div class="alert alert-success mt-4"><span class="text-alert">'.$message.'</span></div>';
							Session::put('message',null);
						}
						@endphp

						@if ($errors->any()) 
						<div class="alert alert-danger">
							<ul style="margin-bottom: 0">
								@foreach ($errors->all() as $message) 
								<li>{{ $message }}</li>
								@endforeach
							</ul>
						</div>
						@endif
						<form method="post" action="{{url('customer/update-account')}}" class="row">
							{{ csrf_field() }}
							@foreach($data_customer as $val)
							<div class="col-md-6 col-xs-12">
								<h4 class="mb-3">Chỉnh sửa thông tin</h4> 
								<div class="form-group">
									<label>Tên Đăng Nhập</label>
									<input type="text" value="{{$val->customer_name}}"  placeholder="Tên Đăng Nhập" name="customer_name"  class="form-control">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" value="{{$val->customer_email}}"  placeholder="Email" name="customer_email"  class="form-control">
								</div>
								<div class="form-group">
									<label>Số Điện Thoại</label>
									<input type="text" value="{{$val->customer_phone}}"  placeholder="Số Điện Thoại" name="customer_phone"  class="form-control">
								</div>
								<div class="form-group">
									<button class="btn btn-primary w-100" type="submit">Cập nhật thông tin</button>
								</div>
							</div>
							<div class="col-md-6 col-xs-12">
								<h4 class="mb-3">Thay đổi mật khẩu</h4> 
								<div class="form-group">
									<label>Mật Khẩu Cũ</label>
									<div class="form-control-content ">
										<div class="input-group">
											<input type="password"  placeholder="Mật Khẩu" value="" name="customer_password" class="form-control js-visible-password">
											<div class="input-group-append">
												<div class="input-group-text" data-action="show-password">
													<i class="fal fa-eye-slash"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Mật Khẩu Mới</label>
									<div class="form-control-content ">
										<div class="input-group">
											<input type="password"  placeholder="Mật Khẩu" value="" name="password" class="form-control js-visible-password">
											<div class="input-group-append">
												<div class="input-group-text" data-action="show-password">
													<i class="fal fa-eye-slash"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Nhập lại mật khẩu</label>
									<div class="form-control-content ">
										<div class="input-group">
											<input type="password"  placeholder="Mật Khẩu" value="" name="password_confirmation" class="form-control js-visible-password">
											<div class="input-group-append">
												<div class="input-group-text" data-action="show-password">
													<i class="fal fa-eye-slash"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection()