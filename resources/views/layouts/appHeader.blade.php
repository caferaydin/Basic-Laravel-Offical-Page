<div class="hor-header header">
    <div class="container main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                href="javascript:void(0)"></a>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="{{ route('index') }}">
                <img src="{{ asset('asset/images/logo/Merve-KIR-cyan.png') }}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{ asset('asset/images/logo/Merve-KIR-dark.png') }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                </button>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse bg-white px-0" id="navbarSupportedContent-4">

                        <div class="header-nav-right p-5">
                            @guest
                            {{-- @if (Route::has('login'))
                            <a href="{{ route('register') }}" class="btn ripple btn-min w-sm btn-outline-primary me-2 my-auto"> {{ __('Register') }}
                            </a>
                            @endif
                            @if (Route::has('register'))
                            <a href="{{ route('login') }}" class="btn ripple btn-min w-sm btn-primary me-2 my-auto">{{ __('Login') }}
                            </a>
                            @endif --}}
                            @else
                            <a href="{{ route('home') }}" class="btn ripple btn-min w-sm btn-outline-primary me-2 my-auto">{{ Auth::user()->name }} </a>

                            <a class="btn ripple btn-min w-sm btn-primary me-2 my-auto" href="{{ route('logout') }}"
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
    </div>
</div>
