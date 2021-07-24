<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="col-md-10 offset-md-1">
                                    <div class="my-5 text-center text-lg-start">
                                        <h1 class="display-8">Đăng Ký</h1>
                                        <p class="text-muted">Đăng ký làm quản trị viên</p>
                                    </div>
                                    <div class="mb-5">
                                        <div class="mb-3{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name" class="control-label">Họ Tên</label>
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Tên của bạn">

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="mb-3{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="control-label">Địa chỉ Email</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">

                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="mb-3{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="control-label">Mật khẩu</label>
                                            <input id="password" type="password" class="form-control" name="password" required placeholder="Mật khẩu">

                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="password-confirm" class="control-label">Xác nhận mật khẩu</label>
                                            
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Xác nhận mật khẩu">
                                            
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
</body>
</html>
