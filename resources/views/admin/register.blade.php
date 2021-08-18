<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/public/backend/images/favicon.png')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Đăng Ký') }}</title>

    <!-- Styles -->
    @include('admin.layout.css_file')
</head>
<body>
    <div class="form-wrapper">
        <div class="container">
            <div class="card form-login">
                <div class="row g-0">
                    <div class="col">
                        <div class="row">
                            <form class="form-horizontal"  id="register-form"  method="POST" action="{{ URL::to('admin/register-post') }}">
                                {{ csrf_field() }}
                                <div class="col-md-10 offset-md-1">
                                    <div class="my-5 text-center text-lg-start">
                                        <h1 class="display-8">Đăng Ký</h1>
                                        <p class="text-muted">Đăng ký làm quản trị viên</p>
                                    </div>
                                    @if ($errors->any()) 
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $message) 
                                            <li>{{ $message }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <div class="mb-5">
                                        <div class="mb-3">
                                            <label for="name" class="control-label">Họ Tên</label>
                                            <input id="name" type="text" class="form-control" name="admin_name" value="{{ old('admin_name') }}" placeholder="Tên của bạn">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="control-label">Địa chỉ Email</label>
                                            <input id="email" type="email" class="form-control" name="admin_email" value="{{ old('admin_email') }}" placeholder="Email">
                                        </div>
                                        <div class="mb-3">
                                            <label  class="control-label">Mật khẩu</label>
                                            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Mật khẩu">
                                        </div>
                                        <div class="mb-3">
                                            <label class="control-label">Nhập lại mật khẩu</label>
                                            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Mật khẩu">
                                        </div>
                                        <div class="text-center text-lg-start">
                                            <button class="btn btn-primary">Đăng Ký</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('/public/backend/js/jquery.min.js')}}"></script>
    <script src="{{asset('/public/backend/js/bootstrap.min.js')}}"></script>
</body>
</html>
