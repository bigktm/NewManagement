<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tạo mật khẩu mới') }}</title>

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
                            <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="col-md-10 offset-md-1">
                                    <div class="my-5 text-center text-lg-start">
                                        <h1 class="display-8">Lấy lại mật khẩu</h1>
                                    </div>
                                    <div class="mb-5">
                                        <div class="mb-3{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="control-label">Địa chỉ Email</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="mb-3{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="control-label">Mật khẩu</label>
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="mb-3{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                            <label for="password-confirm" class="control-label">Xác nhận mật khẩu</label>
                                            
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                            @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                            @endif
                                            
                                        </div>
                                        <div class="text-center text-lg-start">
                                            <button class="btn btn-primary">Đặt lại mật khẩu</button>
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