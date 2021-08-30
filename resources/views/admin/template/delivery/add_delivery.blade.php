@extends('admin.dashboard')
@section('title', 'Thêm phí vận chuyển')
@section('title-page', 'Thêm phí vận chuyển')
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
                <li class="breadcrumb-item active" aria-current="page">Thêm phí vận chuyển</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-7">
            <div class="panel-body mb-4">
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<div class="alert alert-success"><span class="text-alert">'.$message.'</span></div>';
                    Session::put('message',null);
                }
                ?>
                <div class="position-center col-md-12">
                    <form role="form " class="row" action="{{URL::to('/save-delivery')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group col-md-4">
                            <label class="label-location">Chọn Tỉnh/ Thành Phố</label>
                            <select id="city" name="city" class="form-control field-input select_address city">
                                <option value="" selected="">Tỉnh/ Thành phố</option>
                                @foreach($city as $val)
                                <option value="{{$val->matp}}" >{{$val->name_city}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="label-location">Chọn Quận/ Huyện</label>
                            <select id="province" name="province" class="form-control field-input select_address province">
                                <option value="" selected="">Chọn Quận/ Huyện</option>
                            </select>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="label-location">Chọn Phường/ Xã</label>
                            <select id="ward" name="ward" class="field-input form-control ward">
                                <option value="" selected="">Chọn Phường/ Xã</option>
                            </select>
                        </div>
                        <div class="form-group relative col-md-4">
                            <label>Phí Vận Chuyển</label>
                            <input type="text" name="fee_feeship" class="form-control">
                        </div>
                        <div class="form-group col-md-8 flex-end d-flex">
                            <button type="submit" name="add_brand_product mt-3" class="btn btn-primary">Thêm phí vận chuyển</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ content -->
@endsection
