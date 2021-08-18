@extends('admin.dashboard')
@section('title', 'Thêm thương hiệu sản phẩm')
@section('title-page', 'Thêm thương hiệu sản phẩm')
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
                <li class="breadcrumb-item active" aria-current="page">Thêm Silder</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-body mb-4">
                <div class="position-center col-md-12">
                    <form role="form " class="row justify-between" action="{{URL::to('/save-slider')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hình ảnh slider</label>
                                <div class="input-group form-control">
                                    <input id="upload" type="file" onchange="readURL(this);" required name="slider_image" class="form-control">
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted"></label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> 
                                            <i class="fa fa-cloud-upload mr-2 text-muted"></i>
                                            <small class="text-uppercase font-weight-bold text-muted">Chọn hình ảnh</small>
                                        </label>
                                    </div>
                                </div>
                                <!-- Uploaded image area-->
                                <div class="image-area mt-4" style="display: none;">
                                    <img id="imageResult" src="#" alt="" class="img-fluid " style="max-height: fit-content">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="name">Tiêu đề h1</label>
                                <input type="text" required class="form-control" name="slider_title" placeholder="Tiêu đề" >
                            </div>
                            <div class="form-group">
                                <label>Tiêu đề con h4</label>
                                <input type="text" name="slider_subtitle" required class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Liên kết danh mục button</label>
                                <select name="category_slider" class="form-control input-sm select2-example ">
                                    @foreach($category as $key => $val_cat)
                                    @if($val_cat->category_parent==0)
                                    <option style="text-transform: uppercase;" value="{{$val_cat->category_id}}">{{$val_cat->category_name}}</option>
                                    @foreach($category as $key => $cate_sub)
                                    @if($cate_sub->category_parent!=0 && $cate_sub->category_parent==$val_cat->category_id)
                                    <option style="color: #777;" value="{{$cate_sub->category_id}}">&nbsp;&nbsp;&nbsp; {{$cate_sub->category_name}}</option>   
                                    @endif
                                    @endforeach 
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <button type="submit" name="add_slider mt-3" class="btn btn-primary">Thêm Siler</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ content -->

@endsection
