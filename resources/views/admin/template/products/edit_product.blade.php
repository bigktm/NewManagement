@extends('admin.dashboard')
@section('title', 'Sửa sản phẩm')
@section('title-page', 'Sửa sản phẩm')
@section('content')
<!-- content -->
<div class="content ">

    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item" aria-current="page"><a href="#">Sửa sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body mb-4">
                <div class="position-center col-md-12">
                    @foreach($edit_product as $key => $edit_value)
                    <form role="form " class="row" action="{{URL::to('/update-product/'. $edit_value->product_id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-5 ">
                            <h3 class="mb-4">Thông tin cơ bản</h3>
                            <div class="form-group">
                                <label for="product_image">Hình ảnh sản phẩm</label>
                                <div class="input-group form-control">
                                    <input id="upload" type="file" onchange="readURL(this);"  name="product_image" class="form-control">
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">{{$edit_value->product_image}}</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> 
                                            <i class="fa fa-cloud-upload mr-2 text-muted"></i>
                                            <small class="text-uppercase font-weight-bold text-muted">Chọn hình ảnh</small>
                                        </label>
                                    </div>
                                </div>
                                <!-- Uploaded image area-->
                                <div class="image-area mt-4">
                                    <img id="imageResult" src="{{asset('public/uploads/products/'. $edit_value->product_image)}}" alt="" class="img-fluid ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                <textarea style="resize: none" rows="4" class="form-control" name="product_desc" id="exampleInputPassword1" placeholder="Mô tả danh mục">{{$edit_value->product_desc}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-7 pl-5">
                            <h3 class="mb-4">Thông tin bán hàng</h3>
                            <div class="row"> 
                                <div class="form-group col-md-6">
                                    <label for="product_name">Tên sản phẩm</label>
                                    <input type="text"  class="form-control" onkeyup="ChangeToSlug();" name="product_name"  id="name" placeholder="Tên sản phẩm" value="{{$edit_value->product_name}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="category_name">Đường dẫn</label>
                                    <input type="text" value="{{$edit_value->product_slug}}" class="form-control" name="product_slug"  id="convert_slug">
                                </div> 
                                <div class="form-group  col-md-6">
                                    <label for="">Giá bán</label>
                                    <input type="text"  class="form-control" name="product_price"  id="" placeholder="Giá bán" value="{{$edit_value->product_price}}">
                                </div>
                                <div class="form-group  col-md-6">
                                    <label for="">Mã sản phẩm</label>
                                    <input type="text" name="product_sku" class="form-control" placeholder="Mã sản phẩm" value="{{$edit_value->product_sku}}">
                                </div>
                                <div class="form-group  col-md-6">
                                    <label for="">Tình trạng</label>
                                    <select name="product_status" class="form-control input-sm m-bot15">
                                    @if($edit_value->product_status==0) 
                                        <option value="1">Còn hàng</option>
                                        <option selected value="0">Hết hàng</option>
                                    @else
                                        <option selected value="1">Còn hàng</option>
                                        <option value="0">Hết hàng</option>
                                    @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Từ khóa sản phẩm</label>
                                    <input type="text" class="form-control tagsinput-example" name="product_keywords" placeholder="Từ khoá" value="{{$edit_value->product_keywords}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Danh mục</label>
                                    <select name="category_product" class="form-control input-sm select2-example ">
                                        @foreach($category as $key => $cate)
                                            @if($cate->category_id==$edit_value->category_id)
                                            <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                            @else
                                            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Thương Hiệu</label>
                                    <select name="brand_product" class="form-control input-sm m-bot15">
                                        @foreach($brand as $key => $brand)
                                            @if($brand->brand_id==$edit_value->brand_id)
                                                <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                            @else
                                                <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Chi tiết sản phẩm</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="product_content"  id="editor" placeholder="Nội dung sản phẩm"></textarea>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <button type="submit" name="add_product" class="btn btn-primary">Cập nhật sản phẩm</button>
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
