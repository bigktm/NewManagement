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
	@php
	$message_error = Session::get('message_error');
	if($message_error){
		echo '<div class="alert alert-danger"><span class="text-alert">'.$message_error.'</span></div>';
		Session::put('message_error',null);
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
	<div class="row mt-4">
		<div class="col-md-12">
			<div class="customer_wrapper row">	
				<div id="account_section__login" class="account_section account_section__login col-md-6 mt-4">
					<div class="customer_item_wrap container-sm mr-auto ml-0 px-0">
						<form method="post" action="{{url('customer/login-form')}}">
							{{ csrf_field() }}
							<h4 class="mb-3 close-wrapper">Đăng Nhập</h4>
							<div class="form-group">
								<label>Email</label>
								<input type="email" required placeholder="Nhập Email" name="customer_email" class="form-control">
							</div>
							<div class="form-group">
								<label>Mật khẩu</label>
								<div class="form-control-content col-12">
									<div class="input-group">
										<input type="password" required placeholder="********" value="" name="customer_password" class="form-control js-visible-password">
										<div class="input-group-append">
											<div class="input-group-text" data-action="show-password">
												<i class="fal fa-eye-slash"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-primary w-100" type="submit">Đăng Nhập</button>
							</div>
						</form>
					</div>
				</div>

				<div id="account_section__register" class="account_section account_section__register col-md-6 mt-4">
					<div class="customer_item_wrap container-sm ml-auto mr-0 px-0">
						<h4 class="mb-0">Đăng ký làm thành viên</h4>
						<p class="mb-3">Đăng ký làm thành viên để được nhận những ưu đãi</p>
						<form method="post" action="{{url('customer/register-form')}}">
							{{ csrf_field() }}
							<div class="form-group">
								<label>Tên Đăng Nhập</label>
								<input type="text" value=""  placeholder="Tên Đăng Nhập" name="customer_name"  class="form-control">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" value=""  placeholder="Email" name="customer_email"  class="form-control">
							</div>
							<div class="form-group">
								<label>Số Điện Thoại</label>
								<input type="text" value=""  placeholder="Số Điện Thoại" name="customer_phone"  class="form-control">
							</div>
							<div class="form-group">
								<label>Mật Khẩu</label>
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
								<button class="btn btn-primary w-100" type="submit">Đăng Ký</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection()