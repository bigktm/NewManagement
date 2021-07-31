@extends('admin.dashboard')
@section('title', 'Danh sách Slider')
@section('title-page', 'Danh sách Slider')
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
				<li class="breadcrumb-item active" aria-current="page">Tất Cả Silder</li>
			</ol>
		</nav>
	</div>

	<?php
	$message = Session::get('message');
	if($message){
		echo '<div class="alert alert-success"><span class="text-alert">'.$message.'</span></div>';
		Session::put('message',null);
	}
	?>
    <div class="table-responsive">
        <table class="table table-custom table-lg mb-0" id="orders">
            <thead>
                <tr>
                    <th>
                        <input class="form-check-input select-all" type="checkbox" data-select-all-target="#orders"
                        id="defaultCheck1">
                    </th>
                    <th>ID</th>
                    <th>Hình ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Tiêu đề con</th>
                    <th>Liên kết danh mục</th>
                    <th class="text-end"></th>
                </tr>
            </thead>
            <tbody>
            	@foreach($slider_list as $slider)
                <tr>
                    <td>
                        <input class="form-check-input" type="checkbox">
                    </td>
                    <td>{{$slider->slider_id}}</td>
                    <td><img src="{{asset('public/uploads/sliders/'. $slider->slider_image)}}" class="rounded" width="100"></td>
                    <td>{{$slider->slider_title}}</td>
                    <td>{{$slider->slider_subtitle}}</td>
                    <td>{{$slider->category_name}}</td>
                    <td class="text-end">
                        <div class="d-flex">
                            <div class="dropdown ms-auto">
                                <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                	<a href="{{URL::to('/edit-slider/'.$slider->slider_id)}}" class="dropdown-item">Sửa Slider</a>
                                	<a data-id="{{$slider->slider_id}}" data-action="{{URL::to('/delete-slider/'.$slider->slider_id)}}" class="dropdown-item delete-product">Xoá Slider</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
<!-- ./ content -->
@endsection
