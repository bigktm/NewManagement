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
                <li class="breadcrumb-item" aria-current="page"><a href="{{URL::to('/all-brand-product')}}">Thương Hiệu</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm thương hiệu</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel-body mb-4">
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<div class="alert alert-success"><span class="text-alert">'.$message.'</span></div>';
                    Session::put('message',null);
                }
                ?>
                <div class="position-center col-md-12">
                    <form role="form " class="row" action="{{URL::to('/save-brand-product')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group  col-md-6">
                            <label for="name">Tên thương hiệu</label>
                            <input type="text"  class="form-control" onkeyup="ChangeToSlug();" name="brand_product_name"  id="name" placeholder="Tên thương hiệu" >
                        </div>
                        <div class="form-group  col-md-6">
                            <label for="convert_slug">Đường dẫn</label>
                            <input type="text" name="brand_product_slug" class="form-control" id="convert_slug" placeholder="">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Mô tả</label>
                            <textarea style="resize: none" rows="4" class="form-control" name="brand_product_desc" placeholder="Mô tả"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="brand_product_status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6 flex-end d-flex">
                            <button type="submit" name="add_brand_product mt-3" class="btn btn-primary">Thêm thương hiệu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ content -->

@endsection
