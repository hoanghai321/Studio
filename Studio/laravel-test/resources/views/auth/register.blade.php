@extends('layouts.app')
@section('content')

<body style="margin-bottom: 120px;"  id="body">
    <h1 style="text-align: center;" class="h1 font-weight-bold text-theme">Đăng ký</h1>
    <hr>
    <div id="main-wrapper" class="container">
        <div class="row justify-content-center">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="col-md-4">
                                <div class="product-info">
                                    <img style="transition: ease all 0.6s; max-width: 90%; height: auto; background-position: center center;background-repeat: no-repeat;border: 1px solid; padding: 20px; box-shadow: 10px 15px yellow;" src="/images/0.jpg">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">{{ __('Họ Tên') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus pattern="[A-Za-z].{*}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">{{ __('Mật khẩu') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">{{ __('Nhập lại Mật khẩu') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone">{{ __('Điện Thoại') }}</label>
                                    <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus, pattern="[0-9]{3}[0-9]{3}[0-9]{4}">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address">{{ __('Địa chỉ') }}</label>
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus, pattern="[A-Za-z0-9].{5,}">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                        <hr>
                                        <p class="mt-3 mb-0">
                                            Bạn đã có tài khoản? <a href="/login" class="text-primary ml-1">Login</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection