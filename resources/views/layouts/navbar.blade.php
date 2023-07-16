<div class="landing-top-header overflow-hidden">
    <div class="top sticky">
        <!--APP-SIDEBAR-->
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <div class="app-sidebar horizontal-main">
            <div class="container">
                <div class="row">
                    <div class="main-sidemenu navbar px-0">
                        <a class="navbar-brand ps-0 d-none d-lg-block" href="{{ route('index') }}">
                            <img alt="" class="logo-2"
                                src="{{ asset('asset/images/logo/Merve-KIR-cyan.png') }}">
                            <img src="{{ asset('asset/images/logo/MK-dark.png') }}" class="logo-3" alt="logo">
                        </a>
                        <ul class="side-menu">
                            <li class="slide">
                                <a class="side-menu__item active" data-bs-toggle="slide" href="#home"><span
                                        class="side-menu__label">{{ __('Anasayfa') }}</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#About"><span
                                        class="side-menu__label">{{ __('Hakkımda') }}</span></a>
                            </li>
                            {{-- <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#Blog"><span
                                        class="side-menu__label">{{ __('Blog') }}</span></a>
                            </li> --}}
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#Contact"><span
                                        class="side-menu__label">{{ __('İletişim') }}</span></a>
                            </li>
                        </ul>

                        <div class="header-nav-right d-none d-lg-flex">

                            @guest
                                {{-- @if (Route::has('login'))
                                    <a href="{{ route('login') }}"
                                        class="btn ripple btn-min w-sm btn-outline-primary me-2 my-auto d-lg-none d-xl-block d-block"> {{ __('Login') }}
                                    </a>
                                @endif

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="btn ripple btn-min w-sm btn-primary me-2 my-auto d-lg-none d-xl-block d-block">{{ __('Register') }}
                                    </a>
                                @endif --}}
                            @else
                                    <a href="{{ route('home') }}" class="btn ripple btn-min w-sm btn-outline-primary me-2 my-auto d-lg-none d-xl-block d-block">{{ Auth::user()->name }} </a>

                                        <a class="btn ripple btn-min w-sm btn-success me-2 my-auto d-lg-none d-xl-block d-block" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Çıkış Yap') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/APP-SIDEBAR-->
    </div>


</div
