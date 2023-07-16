@extends('user::layouts.userMaster')

@section('content')

<div class="container-login100">
    <div class="wrap-login100 p-6">
        <form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
            @csrf
            <span class="login100-form-title pb-5">
                {{ __('Login') }}</span>

                <div class="panel panel-primary">
                    <div class="tab-menu-heading">
                        <div class="tabs-menu1">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li class="mx-0"><a href="#tab5" class="active" data-bs-toggle="tab">{{ __('Email') }}</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="panel-body tabs-menu-body p-0 pt-5">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab5">
                                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 form-control ms-0 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" autofocus autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 form-control ms-0 @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password"required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="text-end pt-4">
                                    <p class="mb-0"><a href="{{ route('password.request') }}" class="text-primary ms-1">{{ __('Forgot Password?') }}</a></p>
                                </div>
                                <div class="container-login100-form-btn">
                                    <button class="login100-form-btn btn-primary" type="submit">
                                            {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="text-center pt-3">
                                    <p class="text-dark mb-0">{{ __('Not a member?') }}<a href="register.html" class="text-primary ms-1">{{ __('Sign UP') }}</a></p>
                                </div>
                                <label class="login-social-icon"><span>{{ __('Login with Social') }}</span></label>
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
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
        </div>
    </div>
</div>
@endsection



