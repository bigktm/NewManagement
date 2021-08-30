@extends('index')
@section('layout')
<style>
	.header-page {
		display: none;
	}
	.footer-page {
		display: none;
	}
	#main-content {
		padding-bottom: 0;
	}
</style>
<div class="container">
	<div class=" row d-flex justify-between formCheckOut">
		<div class="main col-md-7" style="padding-right: 3rem">
			<div class="main-header">
				<a href="{{URL::to('/')}}" class="logo">
					<img alt="Logo" src="{{asset('public/frontend/images/logo.png')}}">
				</a>
				<ul class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="{{URL::to('/your-cart')}}">Giỏ hàng</a>
					</li>
					<li class="breadcrumb-item">Thông tin giao hàng</li>
				</ul>
			</div>
			<div class="main-content">
				<div class="step">
					<form action="{{URL::to('/save-order-form')}}" method="POST">
						{{ csrf_field() }}
						<div class="step-sections steps-onepage">
							<div class="section">
								<div class="section-header">
									<h2 class="section-title tp_title">Thông tin giao hàng</h2>
								</div>
								<div class="section-content section-customer-information no-mb">
									@if(!Session::get('customer_id'))
									<p class="section-content-text">
										Bạn đã có tài khoản thành viên? <a href="{{URL::to('customer/login')}}">Đăng nhập</a>
									</p>
									@else
									<p class="section-content-text">
										Xin chào, <a href="{{URL::to('customer/profile')}}" style="color:#f1af51;">{{ Session::get('customer_name') }}</a>
									</p>
									@endif
									<div class="fieldset row flex-wrap">
										<div class="field col-md-8 field-two-thirds">
											<div class="field-input-wrapper">
												<input placeholder="Họ và tên" type="text" required  name="shipping_name" class=" field-input" value="{{ Session::get('customer_name') }}" id="form-validation-field-0">
											</div>
										</div>
										<div class="field col-md-4 field-required field-third">
											<div class="field-input-wrapper">
												<input placeholder="Số điện thoại" type="text" required name="shipping_phone" class="field-input customerPointCheck" value="{{ Session::get('customer_phone') }}">
											</div>
										</div>
										<div class="field col-md-12">
											<div class="field-input-wrapper">
												<input placeholder="Địa chỉ" type="text" required name="shipping_address" class=" field-input" id="billing_address_address1" value="">
											</div>
										</div>
									</div>
								</div>
								<div class="section-content">
									<div class="fieldset">
										<div id="form_update_location" class="form_update_location row form-group">
											<div class="col-md-4 col-sm-12">
												<div class="field-input-wrapper field-input-wrapper-select">
													<label class="label-location">Tỉnh/ Thành Phố</label>
													<select id="city" name="city" class="field-input select_address city">
														<option value="" selected="">Tỉnh/ Thành phố</option>
														@foreach($city as $val)
															<option value="{{$val->matp}}" >{{$val->name_city}}</option>
														@endforeach
													</select>
													<input type="hidden" name="data_city" value="">
												</div>
											</div>
											<div class="col-md-4 col-sm-12">
												<div class="field-input-wrapper field-input-wrapper-select">
													<label class="label-location">Quận/ Huyện</label>
													<select id="province" name="province" class="field-input select_address province">
														<option value="" selected="">Chọn Quận/ Huyện</option>
													</select>
												</div>
											</div>
											<div class="col-md-4 col-sm-12">
												<div class="field-input-wrapper field-input-wrapper-select">
													<label class="label-location">Phường/ Xã</label>
													<select id="ward" name="ward" class="field-input ward">
														<option value="" selected="">Chọn Phường/ Xã</option>
													</select>
												</div>
											</div>
										</div>
										<div class="field">
											<div class="field-input-wrapper">
												<div class="descriptionCustomer">
													<textarea name="shipping_notes" required class="input" placeholder="Ghi chú" rows="3" style="width: 100%;padding: 5px;border-radius: 4px;transition: all .2s ease-out;"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="change_pick_location_or_shipping">
									<div id="section-shipping-rate">
										<div id="section-payment-method" class="section">
											<div class="section-header">
												<h2 class="section-title tp_title">Phương thức thanh toán</h2>
											</div>
											<div class="section-content">
												<div class="content-box">
													<div class="radio-wrapper content-box-row at-home">
														<div class="pure-radio-css"> 
															<input class="form-check-input" name="shipping_method" value="Thanh toán tại nhà (COD)" type="radio"  id="flexRadioDefault1" checked="checked">
															<label for="flexRadioDefault1">Thanh toán khi nhận hàng (COD)</label>   
														</div>  
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="step-footer text-right">
								<div id="form_next_step">
									<button type="submit" class="step-footer-continue-btn btn tp_button">
										<span class="btn-content">Hoàn tất đơn hàng</span>
									</button>
								</div>
								<a class="step-footer-previous-link tp_title" href="{{URL::to('/your-cart')}}"><i class="fal fa-angle-left"></i> Giỏ hàng</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="sidebar-checkout col-md-5">
			<div class="sidebar-content">
				<div class="order-summary order-summary-is-collapsed">
					<h2 class="visually-hidden tp_title">Thông tin đơn hàng</h2>
					<div class="order-summary-section order-summary-section-product-list">
						@php 
						$total = 0;
						$fee = 30000;
						@endphp
						<table class="product-table">
							<tbody>
								@foreach($cart as $cartItem)
								<tr class="product">
									<td class="product-image">
										<div class="product-thumbnail">
											<div class="product-thumbnail-wrapper">
												<img class="product-thumbnail-image" alt="{{$cartItem['product_name']}}" src="{{asset('public/uploads/products/'. $cartItem['product_image'])}}">
											</div>
											<span class="product-thumbnail-quantity" aria-hidden="true">{{$cartItem['qty']}}</span>
										</div>
									</td>
									<td class="product-description">
										<span class="product-description-name order-summary-emphasis tp_product_name">{{$cartItem['product_name']}}</span>
									</td>
									<td class="product-price">
										<span class="order-summary-emphasis">
											<span class="tp_product_price">
												@if($cartItem['product_price_sale'] > 0)
												<span class="price-product">{{number_format($cartItem['product_price_sale'])}} ₫</span>
												@else
												<span class="price-product">{{number_format($cartItem['product_price'])}} ₫</span>
												@endif 
											</span>
										</span>
									</td>
								</tr>
								<?php
								if($cartItem['product_price_sale'] > 0) {
									$subtotal = $cartItem['qty'] * $cartItem['product_price_sale'];
								} 
								else {
									$subtotal = $cartItem['qty'] * $cartItem['product_price'];
								}
								$total += $subtotal;
								?>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="order-summary-sections">
						<div class="order-summary-section order-summary-section-discount">
							@php
							$message = Session::get('message');
							$message_error = Session::get('message_error');
							if($message){
								echo '<div class="alert alert-success mt-4"><span class="text-alert">'.$message.'</span></div>';
								Session::put('message',null);
							}elseif($message_error) {
								echo '<div class="alert alert-danger mt-4"><span class="text-alert">'.$message_error.'</span></div>';
								Session::put('message_error',null);
							}
							@endphp
							<form action="{{url('check-coupon')}}" method="POST" >
								{{ csrf_field() }}
								<div id="form_discount_add">
									<div class="fieldset">
										<div class="field  ">
											<div id="txtCode" style="padding: 0 0 5px 0"></div>
											<div class="d-flex justify-between field-input-btn-wrapper">
												<input placeholder="Mã giảm giá" class="field-input" name="coupon" id="discount_code">
												<button type="submit" id="getCoupon" class="btn tp_button">
													<span class="btn-content">Sử dụng</span>
												</button>
											</div>
										</div>
									</div>
									@if($total > 500000)
									<p>Nhập mã " <span style="color:#f1af51;"><strong>{{$code}}</strong></span> " Giảm thêm {{$code_per}}% cho đơn hàng ( &gt; 500k )</p>
									@else
									<p>Nhập mã " <span style="color:#f1af51;"><strong>{{$code_free}}</strong></span> " Giảm thêm {{number_format($price_free)}}đ cho đơn hàng</p>
									@endif
								</div>
							</form>
						</div>
						<div class="order-summary-section order-summary-section-total-lines">
							<table class="total-line-table">
								<tbody>
									<tr class="total-line total-line-subtotal">
										<td class="total-line-name">Tạm tính</td>
										<td class="total-line-price">
											<span class="order-summary-emphasis">{{ number_format($total) }} ₫</span>
										</td>
									</tr>
									@php
										$coupon = Session::get('coupon');
										$fee_default = 30000;
										$total_coupon = 0;
									@endphp
									@if($coupon)
									<tr class="total-line total-line-shipping">
										<td class="total-line-name">Mã giảm giá</td>
										<td class="total-line-price">
											@foreach($coupon as $val)
												@if($val['coupon_type'] == 1)
													@php
														$total_coupon = $val['coupon_price'];
													@endphp
													<span class="order-summary-emphasis">- {{ number_format($total_coupon) }} đ</span>
												@elseif($val['coupon_type'] == 2)
													@php
														$total_coupon = ($total*$val['coupon_price'])/100;
													@endphp
													<span class="order-summary-emphasis">- {{ number_format($total_coupon) }} đ</span>
												@endif
											@endforeach
										</td>
									</tr>
									@endif
									<tr class="total-line total-line-shipping">
										<td class="total-line-name">Phí vận chuyển</td>
										<td class="total-line-price fee_html">
											<span class="order-summary-emphasis" id="ship_fee">
												{{ number_format($fee_default) }} ₫
											</span>
										</td>
									</tr>
								</tbody>
								<tfoot class="total-line-table-footer">
									<tr class="total-line">
										<td class="total-line-name payment-due-label">
											<span class="payment-due-label-total">Tổng cộng</span>
										</td>
										<td class="total-line-name payment-due">
											<span class="payment-due-currency">VND</span>
											<span class="payment-due-price" id="showTotalMoney" value="">
												{{ number_format($total + $fee_default - $total_coupon) }} ₫
											</span>
										</td>
									</tr>
									<tr class="total-line">
										<td colspan="2" class="total-line-name">
											<div class="notice-checkout">
												<p>HT Store sẽ xác nhận đơn hàng bằng cách gọi điện thoại. Bạn vui lòng để ý điện thoại khi đặt hàng thành công và chờ nhận hàng. Cảm ơn bạn !</p>
											</div>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection()