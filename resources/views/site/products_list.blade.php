@extends('index')
@section('layout')
<div class="container">
	<div class="wrap-bread-crumb">
		<div class="bread-crumb"> 
			<div class="bread-crumb-wrap">
				<span><a href="{{URL::to('/')}}"><i class="fad fa-home mr-3"></i> Home</a></span>
				<span>Shops</span>       		
			</div>
		</div>
	</div>
	<div class="row mt-4">
		@section('sidebar')
			@include('site.layout.sidebar')
		@endsection
		<div class="main-wrap-shop content-wrap content-sidebar-right col-md-9 col-sm-8 col-xs-12">
			@yield('layout_products')
		</div>
	</div> <!-- close row --> 
</div>
@endsection()