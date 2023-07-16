<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('layouts.head')
<body class="app ltr landing-page horizontal">

    <div id="global-loader">
        <img src="{{ asset('asset/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>

    <div class="page">
        <div class="page-main">
            @include('layouts.appHeader')
            @include('layouts.navbar')


            <div class="main-content app-content mt-0">
                <div class="side-app">
                    <div class="main-container">
                        <div class="">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('layouts.footer')
    @include('layouts.script')

</body>
</html>
