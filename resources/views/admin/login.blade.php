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
                            <?php
                                $message = Session::get('message');
                                if($message){
                                    echo '<div class="alert alert-success"><span class="text-alert">'.$message.'</span></div>';
                                    Session::put('message',null);
                                }
                            ?>
                            <form class="form-horizontal" method="POST" action="{{ URL::to('login-post') }}">
                                {{ csrf_field() }}
                                <div class="col-md-10 offset-md-1">
                                    <div class="my-5 text-center text-lg-start">
                                        <h1 class="display-8">Đăng nhập</h1>
                                        <p class="text-muted">Đăng nhập vào trang quản lý cửa hàng</p>
                                    </div>
                                    <div class="mb-5">
                                        <div class="mb-3">
                                            <input id="admin_email" type="email" class="form-control" name="admin_email" value="" required autofocus placeholder="Email">
                                        </div>
                                        <div class="mb-3">
                                            <input id="admin_password" type="password" class="form-control" name="admin_password" required placeholder="Mật khẩu">
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

                                    <p class="text-center d-block d-lg-none mt-5 mt-lg-0">
                                        Nếu chưa có tài khoản admin <a href="#">Đăng ký mới</a>.
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
