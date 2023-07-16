<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('layouts.head')
<body class="app ltr landing-page horizontal">

    <div id="global-loader">
        <img src="{{ asset('asset/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>

    <div class="page">
        <div class="">
            <div class="col col-login mx-auto mt-7">
                <div class="text-center">
                    <a href="{{ route('index') }}"><img src="{{ asset('asset/images/logo/catechsoft.png') }}" class="header-brand-img" alt=""></a>
                </div>

                @yield('content')
            </div>
        </div>
    </div>
    @include('user::layouts.script')
</body>
</html>
