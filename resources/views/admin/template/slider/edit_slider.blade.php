@extends('admin.dashboard')
@section('title', 'Sửa Slider')
@section('title-page', 'Sửa Slider')
@section('content')
<!-- content -->
<div class="content ">
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{URL::to('/dashboard')}}">
                        <i class="bi bi-globe2 small me-2"></i> Tổng quan
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{URL::to('/all-slider')}}">Danh sách silder</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Sửa Slider</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-body mb-4">
                <div class="position-center col-md-12">
                    @foreach($edit_slider as $key => $edit_val)
                    <form role="form " class="row justify-between" action="{{URL::to('/update-slider/'.$edit_val->slider_id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hình ảnh slider</label>
                                <div class="input-group form-control">
                                    <input id="upload" type="file" onchange="readURL(this);"  name="slider_image" class="form-control">
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">{{$edit_val->slider_image}}</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> 
                                            <i class="fa fa-cloud-upload mr-2 text-muted"></i>
                                            <small class="text-uppercase font-weight-bold text-muted">Chọn hình ảnh</small>
                                        </label>
                                    </div>
                                </div>
                                <!-- Uploaded image area-->
                                <div class="image-area mt-4">
                                    <img id="imageResult" src="{{asset('public/uploads/sliders/'.$edit_val->slider_image)}}" alt="" class="img-fluid " style="max-height: fit-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="name">Tiêu đề h1</label>
                                <input type="text"  class="form-control" name="slider_title" value="{{$edit_val->slider_title}}" placeholder="Tiêu đề" >
                            </div>
                            <div class="form-group">
                                <label>Tiêu đề con h4</label>
                                <input type="text" name="slider_subtitle" class="form-control" placeholder="" value="{{$edit_val->slider_subtitle}}">
                            </div>
                            <div class="form-group">
                                <label>Liên kết danh mục</label>
                                <select name="category_slider" class="form-control input-sm select2-example ">
                                    @foreach($category as $key => $cat)
                                    @if($cat->category_id==$edit_val->category_id)
                                    <option selected value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                                    @else
                                    <option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <button type="submit" name="add_slider mt-3" class="btn btn-primary">Cập nhật Siler</button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ content -->

@endsection
