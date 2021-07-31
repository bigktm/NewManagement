@extends('admin.dashboard')
@section('title', 'Đăng sản phẩm mới')
@section('title-page', 'Đăng sản phẩm mới')
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
                <li class="breadcrumb-item" aria-current="page"><a href="#">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
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
                    <form role="form " class="row" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-5 ">
                            <h3 class="mb-4">Thông tin cơ bản</h3>
                            <div class="form-group">
                                <label for="product_image">Hình ảnh sản phẩm</label>
                                <div class="input-group form-control">
                                    <input id="upload" type="file" onchange="readURL(this);"  name="product_image" class="form-control">
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
                            <div class="form-group">
                                <label for="">Mô tả sản phẩm</label>
                                <textarea style="resize: none" rows="4" class="form-control" name="product_desc"  placeholder="Mô tả danh mục"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Loại sản phẩm</label>
                                <select name="product_type" class="form-control input-sm m-bot15"> 
                                    <option value="0">Sản phẩm mới</option>
                                    <option value="1">Sản phẩm khuyễn mãi</option>
                                    <option value="2">Sản phẩm đặc biệt</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-7 pl-5">
                            <h3 class="mb-4">Thông tin bán hàng</h3>
                            <div class="row"> 
                                <div class="form-group col-md-6">
                                    <label for="product_name">Tên sản phẩm</label>
                                    <input type="text"  class="form-control" onkeyup="ChangeToSlug();" name="product_name"  id="name" placeholder="Tên sản phẩm" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="category_name">Đường dẫn</label>
                                    <input type="text"  class="form-control" name="product_slug"  id="convert_slug">
                                </div> 
                                <div class="form-group  col-md-6">
                                    <label for="">Giá bán</label>
                                    <input type="text"  class="form-control" name="product_price"  id="" placeholder="Giá bán" >
                                </div>
                                <div class="form-group  col-md-6">
                                    <label for="">Mã sản phẩm</label>
                                    <input type="text" name="product_sku" class="form-control" placeholder="Mã sản phẩm">
                                </div>
                                <div class="form-group  col-md-6">
                                    <label for="">Tình trạng</label>
                                    <select name="product_status" class="form-control input-sm m-bot15"> 
                                        <option value="1">Còn hàng</option>
                                        <option value="0">Hết hàng</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Từ khóa sản phẩm</label>
                                    <input type="text" class="form-control tagsinput-example" name="product_keywords" placeholder="Từ khoá" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Danh mục</label>
                                    <select name="category_product" class="form-control input-sm select2-example ">
                                        @foreach($cat_product as $key => $val_cat)
                                            @if($val_cat->category_parent==0)
                                                <option style="text-transform: uppercase;" value="{{$val_cat->category_id}}">{{$val_cat->category_name}}</option>
                                                @foreach($cat_product as $key => $cate_sub)
                                                    @if($cate_sub->category_parent!=0 && $cate_sub->category_parent==$val_cat->category_id)
                                                    <option style="color: #777;" value="{{$cate_sub->category_id}}">&nbsp;&nbsp;&nbsp; {{$cate_sub->category_name}}</option>   
                                                    @endif
                                                @endforeach 
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Thương Hiệu</label>
                                    <select name="brand_product" class="form-control input-sm m-bot15">
                                        @foreach($brand_product as $key => $val_brand)
                                            <option value="{{$val_brand->brand_id}}">{{$val_brand->brand_name}}</option>
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
                            <button type="submit" name="add_product" class="btn btn-primary">Thêm sản phẩm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ./ content -->

@endsection
