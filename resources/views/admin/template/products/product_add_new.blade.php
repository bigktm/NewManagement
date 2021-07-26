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
                <div class="position-center col-md-12">
                    <form role="form " class="row" action="{{URL::to('/save-category-product')}}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-5 ">
                            <h3>Thông tin cơ bản</h3>
                            <div class="form-group">
                                <label for="category_name">Tên sản phẩm</label>
                                <input type="text"  class="form-control" onkeyup="ChangeToSlug();" name="category_product_name"  id="category_name" placeholder="Danh mục" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                <textarea style="resize: none" rows="4" class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Từ khóa sản phẩm</label>
                                <input type="text"  class="form-control" name="category_product_name"  id="category_name" placeholder="Từ khóa sản phẩm" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Thuộc danh mục</label>
                                <select name="category_parent" class="form-control input-sm m-bot15">
                                    <option value="0">---Danh mục cha---</option>
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-7 ">
                            <h3>Thông tin bán hàng</h3>
                            <div class="row">
                                <div class="form-group  col-md-6">
                                    <label for="category_name">Giá bán</label>
                                    <input type="text"  class="form-control" onkeyup="ChangeToSlug();" name="category_product_name"  id="category_name" placeholder="Danh mục" >
                                </div>
                                <div class="form-group  col-md-6">
                                    <label for="convert_slug">Giá khuyễn mãi</label>
                                    <input type="text" name="slug_category_product" class="form-control" id="convert_slug" placeholder="Tên danh mục">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <button type="submit" name="add_category_product" class="btn btn-primary">Thêm danh mục</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- ./ content -->
@endsection
