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
                                    <?php
                                    $message = Session::get('message');
                                    if($message){
                                        echo '<div class="alert alert-danger"><span class="text-alert">'.$message.'</span></div>';
                                        Session::put('message',null);
                                    }
                                    ?>
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

                                    <p class="text-center d-block mt-5 mt-lg-0">
                                        Nếu chưa có tài khoản admin <a href="javascript:;" class="toggle-form">Đăng ký mới</a>.
                                    </p>
                                </div>
                            </form>
                            <form class="form-horizontal"  id="register-form"  method="POST" action="{{ URL::to('admin/register') }}" style="display: none;">
                                {{ csrf_field() }}
                                <div class="col-md-10 offset-md-1">
                                    <div class="my-5 text-center text-lg-start">
                                        <h1 class="display-8">Đăng Ký</h1>
                                        <p class="text-muted">Đăng ký làm quản trị viên</p>
                                    </div>
                                    <div class="mb-5">
                                        <div class="mb-3">
                                            <label for="name" class="control-label">Họ Tên</label>
                                            <input id="name" type="text" class="form-control" name="admin_name" value="" required placeholder="Tên của bạn">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="control-label">Địa chỉ Email</label>
                                            <input id="email" type="email" class="form-control" name="admin_email" value="" required placeholder="Email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="control-label">Mật khẩu</label>
                                            <input id="password" type="password" class="form-control" name="admin_password" required placeholder="Mật khẩu">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="control-label">Nhập lại mật khẩu</label>
                                            <input id="password" type="password" class="form-control" name="admin_password_confirm" required placeholder="Mật khẩu">
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
    <script>
        $('.toggle-form').click(function(){
            $('#login-form').hide();
            $('#register-form').show();
        });
    </script>
</body>
</html>
