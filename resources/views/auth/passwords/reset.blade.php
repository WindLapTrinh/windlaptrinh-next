@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100 " style="width: 1000px; margin: 0 auto">
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
            style="background: #1087be; padding: 68px 0px">
            <div class="featured-image mb-3">
                <img src={{ asset('images/reset-pass.png') }} class="img-fluid" style="width: 250px;">
            </div>
            <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Wind Lập
                Trình</p>
            <small class="text-white text-wrap text-center text-contact"
                style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Quản lý website chuyên nghiệp và
                bảo mật.
            </small>
        </div>
        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                <div class="header-text mb-4">
                    <h2>Reset Password</h2>
                    <p>Nhập thông tin mật khẩu mới của bạn bên dưới để xác nhận. Chúc bạn một ngày làm việc hiệu quả.</p>
                </div>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="row mb-3">
                        <div class="mb-3 col-12">
                            <input id="email" type="email"
                                class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror"
                                name="email" placeholder="Nhập email của bạn..." value="{{ $email ?? old('email') }}" required
                                autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class=" mb-3 col-12">
                            <input id="password" type="password"
                                class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid @enderror"
                                name="password" placeholder="Nhập mật khẩu..." required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class=" mb-3 col-12">
                            <input id="password-confirm" type="password"
                                class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid @enderror"
                                name="password_confirmation" placeholder="Nhập lại mật khẩu..." required autocomplete="new-password">

                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="input-group mb-3 col-12">
                            <button type="submit" class="btn btn-lg btn-primary btn-login w-100 fs-6">
                                {{ __('Xác nhận') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
