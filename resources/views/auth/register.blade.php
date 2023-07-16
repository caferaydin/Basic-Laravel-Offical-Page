@extends('user::layouts.userMaster')

@section('content')
<div class="container-login100">
    <div class="wrap-login100 p-6">
        <form class="login100-form validate-form" action="{{ route('register') }}" method="POST">
            @csrf
            <span class="login100-form-title">
                    {{ __('Register') }}
                </span>

            <div class="wrap-input100 validate-input input-group ">
                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                    <i class="mdi mdi-account" aria-hidden="true"></i>
                </a>
                <input class="input100 border-start-0 ms-0 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('User Name') }}">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                    <i class="zmdi zmdi-email" aria-hidden="true"></i>
                </a>
                <input class="input100 border-start-0 ms-0 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                    <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                </a>
                <input id="password" type="password" class="input100 border-start-0 ms-0 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                    <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                </a>
                <input id="password-confirm" type="password" class="input100 border-start-0 ms-0 form-control" name="password_confirmation" required autocomplete="new-password">

                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <label class="custom-control custom-checkbox mt-4">
                    <input type="checkbox" class="custom-control-input">
                    {{-- <span class="custom-control-label">Agree the <a href="#">terms and policy</a></span> --}}
                </label>
            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn btn-primary">
                        {{ __('Register') }}
                </button>
            </div>
            <div class="text-center pt-3">
                <p class="text-dark mb-0 d-inline-flex">{{ __('Already have account ?') }}<a href="{{ route('login') }}" class="text-primary ms-1">{{ __('Sign In') }}</a></p>
            </div>
            <label class="login-social-icon"><span>{{ __('Register with Social') }}</span></label>
            <div class="d-flex justify-content-center">
                <a href="javascript:void(0)">
                    <div class="social-login me-4 text-center">
                        <i class="fa fa-google"></i>
                    </div>
                </a>
                <a href="javascript:void(0)">
                    <div class="social-login me-4 text-center">
                        <i class="fa fa-facebook"></i>
                    </div>
                </a>
                <a href="javascript:void(0)">
                    <div class="social-login text-center">
                        <i class="fa fa-twitter"></i>
                    </div>
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
