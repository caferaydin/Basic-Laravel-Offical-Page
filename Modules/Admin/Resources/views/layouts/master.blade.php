<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('layouts.head')

    <body class="app sidebar-mini ltr light-mode">

        <div id="global-loader">
            <img src="{{ asset('asset/images/loader.svg') }}" class="loader-img" alt="Loader">
        </div>

        <div class="page">
            <div class="page-main">

                @include('admin::layouts.appHeader')
                @include('admin::layouts.navbar')

                @yield('content')
            </div>
        </div>

        @include('admin::layouts.script')
    </body>
</html>
