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
                @if (session('status'))
                <div class="alert alert-success mb-4">
                    {{ session('status') }}
                </div>
                @endif
                <div class="row g-0">
                    <div class="col">
                        <div class="row">
                            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                {{ csrf_field() }}
                                <div class="col-md-10 offset-md-1">
                                    <div class="my-5 text-center text-lg-start">
                                        <h1 class="display-8">Lấy lại mật khẩu</h1>
                                    </div>
                                    <div class="mb-5">
                                        <div class="mb-3{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="control-label">Địa chỉ Email</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="text-center text-lg-start">
                                            <button class="btn btn-primary">Gửi liên kết tới Email</button>
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
