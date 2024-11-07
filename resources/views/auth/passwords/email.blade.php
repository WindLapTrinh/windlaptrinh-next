@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100 " style="width: 1000px; margin: 0 auto">
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
            style="background: #1087be; padding: 68px 0px">
            <div class="featured-image mb-3">
                <img src={{ asset('images/reset-password.png') }} class="img-fluid" style="width: 250px;">
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
                    <h2>Confirm Email</h2>
                    <p>Để lấy lại mật khẩu, vui lòng thông tin email tài khoản. Chúc bạn có một ngày làm việc tràn đầy năng lượng.</p>
                </div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="mb-3 col-12">
                            <input id="email" type="email"
                                class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror"
                                name="email" placeholder="Nhập email của bạn..." value="{{ old('email') }}" required
                                autocomplete="email" autofocus>
                            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
                @if (session('status'))
                <span class="text-success-email" role="alert">
                    {{ session('status') }}
                </span>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
