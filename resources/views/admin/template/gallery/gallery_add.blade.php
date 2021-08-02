@extends('admin.dashboard')
@section('title', 'Thêm hình ảnh cho sản phẩm')
@section('title-page', 'Thêm hình ảnh cho sản phẩm')
@section('content')
<!-- content -->
<div class="content ">

    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{URL::to('/dashboad')}}">
                        <i class="bi bi-globe2 small me-2"></i> Tổng quan
                    </a>
                </li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{URL::to('/all-product-list')}}">Sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm hình ảnh cho sản phẩm</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body mb-4">
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<div class="alert alert-success"><span class="text-alert">'.$message.'</span></div>';
                    Session::put('message',null);
                }
                ?>
                <div class="position-center col-md-12">
                    <form role="form " class="row" action="{{URL::to('/insert-gallery/' .$product_id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-5 ">
                            <div class="form-group">
                                <h3 style="margin-bottom:2rem ">Tải hình ảnh</h3>
                                <div class="input-group form-control">
                                    <input id="upload" type="file" onchange="readURL(this);" required name="gallery_image" class="form-control">
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
                                    <img id="imageResult" src="#" alt="" class="img-fluid ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div id="gallery_load">
                                <h3 style="padding-left: 2rem;margin-bottom:2rem ">Hình ảnh sản phẩm</h3>
                                <ul class="gallery_product_list">
                                    @foreach($show_gallery as $gallery)
                                    <li>
                                        <img src="{{asset('public/uploads/gallery_product/' . $gallery->gallery_image )}}">
                                        <a data-id="{{$gallery->gallery_id}}" data-action="{{URL::to('/delete-gallery/'.$gallery->gallery_id)}}" class="del_gal delete-product"><i class="fad fa-trash text-danger"></i></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <button type="submit" name="add_product" class="btn btn-primary">Thêm hình ảnh</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ./ content -->

@endsection
