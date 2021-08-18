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

    <title>{{ config('app.name', 'Đăng Nhập') }}</title>

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
                            <form class="form-horizontal" id="login-form" method="POST" action="{{ URL::to('login-post') }}" >
                                {{ csrf_field() }}
                                <div class="col-md-10 offset-md-1">
                                    <div class="my-5 text-center text-lg-start">
                                        <h1 class="display-8">Đăng nhập</h1>
                                        <p class="text-muted">Đăng nhập vào trang quản lý cửa hàng</p>
                                    </div>

                                    @php
                                    $message_login = Session::get('message_login');
                                    if($message_login){
                                        echo '<div class="alert alert-danger"><span class="text-alert">'.$message_login.'</span></div>';
                                        Session::put('message_login',null);
                                    }
                                    @endphp

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
                                            <input id="admin_email" type="email" class="form-control" name="admin_email" value="{{ old('admin_name') }}" autofocus placeholder="Email">
                                        </div>
                                        <div class="mb-3">
                                            <input id="admin_password" type="password" class="form-control" name="admin_password" value="{{ old('admin_password') }}" placeholder="Mật khẩu">
                                        </div>
                                        <div class="d-flex justify-between">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember_token" {{ old('remember_token') ? 'checked' : '' }}> Ghi nhớ đăng nhập
                                                </label>
                                            </div>
                                            <p><a href="{{ route('password.request') }}">Quên mật khẩu </a>.</p>
                                        </div>
                                        <div class="text-center text-lg-start">
                                            <button class="btn btn-primary">Đăng Nhập</button>
                                        </div>
                                    </div>

                                    <p class="text-center d-block mt-5 mt-lg-0">
                                        Nếu chưa có tài khoản admin <a href="{{ route('admin.register') }}" class="toggle-form">Đăng ký mới</a>.
                                    </p>
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
