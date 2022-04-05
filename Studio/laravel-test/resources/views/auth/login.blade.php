@extends('layouts.app')
@section('content')
<div style="padding-left: 400px;" id="main-wrapper" class="container">
    <div class="row justify-content-center">
        <div class="card border-0">
            <div class="card-body p-0">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="mb-5">
                                <h1 style="text-align: center;" class="h1 font-weight-bold text-theme">Đăng nhập</h1>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">{{ __('Mật Khẩu') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
        <p class="text-muted text-center mt-3 mb-0">
            Bạn chưa có tài khoản? <a href="/register" class="text-primary ml-1">Register</a>
        </p>
        <!-- end row -->
        <!-- end col -->
    </div>
    <!-- Row -->
</div>
@endsection