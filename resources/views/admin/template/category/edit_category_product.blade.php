@extends('admin.dashboard')
@section('title', 'Thêm danh mục sản phẩm')
@section('title-page', 'Thêm danh mục sản phẩm')
@section('content')
<!-- content -->
<div class="content ">
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{URL::to('dashboard')}}">
                        <i class="bi bi-globe2 small me-2"></i> Tổng quan
                    </a>
                </li>
                <li class="breadcrumb-item" aria-current="page"><a href="{{URL::to('all-category-product')}}">Danh mục</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sửa danh mục</li>
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
                    @foreach($category_by_id as  $edit_value)
                    <form role="form " class="row" action="{{URL::to('/update-category-product/'. $edit_value->category_id)}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group  col-md-6">
                            <label for="category_name">Tên danh mục</label>
                            <input type="text" value="{{$edit_value->category_name}}"  class="form-control" onkeyup="ChangeToSlug();" name="category_product_name"  id="category_name" placeholder="Danh mục" >
                        </div>
                        <div class="form-group  col-md-6">
                            <label for="convert_slug">Đường dẫn</label>
                            <input type="text" value="{{$edit_value->category_slug}}" name="category_product_slug" class="form-control" id="convert_slug" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize: none" rows="4" class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô tả danh mục">{{$edit_value->category_desc}}</textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Từ khóa danh mục</label>
                            <textarea style="resize: none" rows="4" class="form-control" name="category_product_keywords" id="exampleInputPassword1" placeholder="Mô tả danh mục">{{$edit_value->category_keywords}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thuộc danh mục</label>
                            <select name="category_parent" class="form-control input-sm m-bot15">
                                <option value="0">-----------Danh mục cha-----------</option>
                                {!! $htmlOption !!}
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <button type="submit" name="add_category_product" class="btn btn-primary">Cập nhật danh mục</button>
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
