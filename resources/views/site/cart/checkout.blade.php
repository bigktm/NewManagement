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
													<label class="label-location">Chọn Tỉnh/ Thành Phố</label>
													<select id="customcityId" name="customerCityId" class="validate[required] field-input">
														<option data-code="null" value="null" selected="">Tỉnh/ Thành phố</option>
														<option value="254">Hà Nội</option>
														<option value="255">Hồ Chí Minh</option>
														<option value="256">An Giang</option>
														<option value="257">Bà Rịa - Vũng Tàu</option>
														<option value="258">Bắc Ninh</option>
														<option value="259">Bắc Giang</option>
														<option value="260">Bình Dương</option>
														<option value="261">Bình Định</option>
														<option value="262">Bình Phước</option>
														<option value="263">Bình Thuận</option>
														<option value="264">Bến Tre</option>
														<option value="265">Bắc Cạn</option>
														<option value="266">Cần Thơ</option>
														<option value="267">Khánh Hòa</option>
														<option value="268">Thừa Thiên Huế</option>
														<option value="269">Lào Cai</option>
														<option value="270">Quảng Ninh</option>
														<option value="271">Đồng Nai</option>
														<option value="272">Nam Định</option>
														<option value="273">Cà Mau</option>
														<option value="274">Cao Bằng</option>
														<option value="275">Gia Lai</option>
														<option value="276">Hà Giang</option>
														<option value="277">Hà Nam</option>
														<option value="278">Hà Tĩnh</option>
														<option value="279">Hải Dương</option>
														<option value="280">Hải Phòng</option>
														<option value="281">Hòa Bình</option>
														<option value="282">Hưng Yên</option>
														<option value="283">Kiên Giang</option>
														<option value="284">Kon Tum</option>
														<option value="285">Lai Châu</option>
														<option value="286">Lâm Đồng</option>
														<option value="287">Lạng Sơn</option>
														<option value="288">Long An</option>
														<option value="289">Nghệ An</option>
														<option value="290">Ninh Bình</option>
														<option value="291">Ninh Thuận</option>
														<option value="292">Phú Thọ</option>
														<option value="293">Phú Yên</option>
														<option value="294">Quảng Bình</option>
														<option value="295">Quảng Nam</option>
														<option value="296">Quảng Ngãi</option>
														<option value="297">Quảng Trị</option>
														<option value="298">Sóc Trăng</option>
														<option value="299">Sơn La</option>
														<option value="300">Tây Ninh</option>
														<option value="301">Thái Bình</option>
														<option value="302">Thái Nguyên</option>
														<option value="303">Thanh Hóa</option>
														<option value="304">Tiền Giang</option>
														<option value="305">Trà Vinh</option>
														<option value="306">Tuyên Quang</option>
														<option value="307">Vĩnh Long</option>
														<option value="308">Vĩnh Phúc</option>
														<option value="309">Yên Bái</option>
														<option value="310">Đắk Lắk</option>
														<option value="311">Đồng Tháp</option>
														<option value="312">Đà Nẵng</option>
														<option value="313">Đắc Nông</option>
														<option value="314">Hậu Giang</option>
														<option value="315">Bạc Liêu</option>
														<option value="316">Điện Biên</option>
													</select>
												</div>
											</div>
											<div class="col-md-4 col-sm-12">
												<div class="field-input-wrapper field-input-wrapper-select">
													<label class="label-location">Chọn Quận/ Huyện</label>
													<select id="customdistrictId" name="customerDistrictId" class="validate[required] field-input">
														<option value="" selected="">Quận/ Huyện</option>
													</select>
												</div>
											</div>
											<div class="col-md-4 col-sm-12">
												<div class="field-input-wrapper field-input-wrapper-select">
													<label class="label-location">Chọn Phường/ Xã</label>
													<select id="wardId" name="customerWardId" class="validate[required] field-input">
														<option value="" selected="">Phường/ Xã</option>
													</select>
													<input type="hidden" name="selectIdWard">
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
															<label for="flexRadioDefault1">Thanh toán tại nhà (COD)</label>   
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
							<form action="{{url('check-coupon')}}" method="POST" >
								{{ csrf_field() }}
								<div id="form_discount_add">
									<div class="fieldset">
										<div class="field  ">
											<div id="txtCode" style="padding: 0 0 5px 0"></div>
											<div class="d-flex justify-between field-input-btn-wrapper">
												<input placeholder="Mã giảm giá" class="field-input" name="couponCode" id="discount_code">
												<button type="button" id="getCoupon" class="btn tp_button">
													<span class="btn-content">Sử dụng</span>
												</button>
											</div>
										</div>
									</div>
									<p>Nhập mã " <span style="color:#f1af51;"><strong>HTStore</strong></span> " Giảm thêm 5% cho đơn hàng ( &gt; 200k )</p>
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
									<tr class="total-line total-line-shipping">
										<td class="total-line-name">Phí vận chuyển</td>
										<td class="total-line-price">
											<span class="order-summary-emphasis" id="ship_fee">{{ number_format($fee) }} ₫</span>
										</td>
									</tr>
								</tbody>
								<tfoot class="total-line-table-footer">
									<tr class="total-line">
										<td class="total-line-name payment-due-label">
											<span class="payment-due-label-total">Tổng cộng</span>
										</td>
										<td class="total-line-name payment-due">
											<span class="payment-due-price" id="showTotalMoney" value="">{{ number_format($total + $fee) }} ₫</span>
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