@extends('layouts.master')

@section('content')

<div class="screen-headline spacing-top overflow-hidden reveal active" id="home">
    <div class="container px-sm-0">
        <div class="row">
            <div class="col-xl-6 col-lg-6 mb-5 pb-5 animation-zidex pos-relative">
                <h4 class="fw-semibold mt-7">{{ $home->name }}</h4>
                <h1 class="text-start fw-bold">{{ $home->title }} <span
                        class="text-primary animate-heading">{{ $setting->title }}</span></h1>
                <h6 class="pb-3">
                    {{ $home->information }}</h6>

                <a href="#Contact"
                    class="btn ripple btn-min w-lg mb-3 me-2 btn-primary"><i
                        class="fe fe-play me-2"></i> {{ __('İletişim') }}
                </a>
                <a href="#"
                    class="btn ripple btn-min w-lg btn-outline-primary mb-3 me-2"><i
                        class="fe fe-eye me-2 d-inline-flex"></i>{{ __('Blog') }}
                </a>
            </div>
            <div class="col-xl-6 col-lg-6 my-auto">
                {{-- <img src="{{ asset('asset/images/landing/3.png') }}" alt=""> --}}
                <img src="{{ $home->image }}">
            </div>

        </div>
    </div>
</div>

<div class="section bg-landing pb-0 bg-image-style" id="About">
    <div class="container">
        <div class="row">
            <h4 class="text-center fw-semibold">{{ __('Hakkımda') }}</h4>
            <span class="landing-title"></span>
            <div class="col-lg-12">
                <div class="card bg-transparent">
                    <div class="card-body text-dark">
                        <div class="statistics-info">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 ps-0">
                                    <div class="text-center reveal revealleft mb-3">
                                        {{-- <img src="{{ asset('asset/images/landing/1.png') }}"
                                            alt="" class="br-5"> --}}
                                            <img src="{{ $about->image }}" class="br-5">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 pe-0 my-auto">

                                    <div class="ps-5 reveal revealright">
                                        <h2 class="text-start fw-semibold fs-25 mb-6">{{ $about->title }}
                                        </h2>
                                        <div class="d-flex">
                                            <div class="ms-5 mb-4">
                                                <p>
                                                    {{ $about->content }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="section bg-landing" id="Blog">
    <div class="container">
        <div class="row">
            <h4 class="text-center fw-semibold">{{ _('Blog') }}s</h4>
            <span class="landing-title"></span>
            <h2 class="text-center fw-semibold mb-7">{{ __('Blog\'dan en son.') }}</h2>

            <div class="col-lg-6">
                <div class="card bg-transparent reveal">
                    <div class="card-body px-1">
                        <div class="d-flex overflow-visible">

                            <a href="blog-details.html"
                                class="card-aside-column br-5 cover-image"
                                data-bs-image-src="{{ asset('asset/images/media/12.jpg') }}"
                                style="background: url(&quot;{{ asset('asset/images/media/12.jpg') }}&quot;) center center;"></a>

                            <div class="ps-3 flex-column">
                                <span
                                    class="badge {{ __('$blog->color') }} me-1 mb-1 mt-1">{{ __('$blog->category') }}</span>
                                <h3><a href="blog-details.html">{{ __('$blog->title') }}.</a></h3>
                                <div class="">{{ __('$blog->content') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="blog.html" target="_blank"
                    class="btn btn-outline-primary pt-2 pb-2"><i
                        class="fe fe-arrow-right me-2 d-inline-flex"></i>{{ __('Daha fazlasını keşfet') }}
                </a>
            </div>
        </div>
    </div>
</div> --}}

<div class="bg-image-landing section pb-0" id="Contact">
    <div class="container">
        <div class="">
            <div class="card card-shadow reveal">
                <h4 class="text-center fw-semibold mt-7">{{ __('İletişim') }}</h4>
                <span class="landing-title"></span>
                <h2 class="text-center fw-semibold mb-0 px-2"> <span
                    class="text-primary"> {{ __('Benimle') }} </span> {{ __('iletişime geç') }} </h2>
                <div class="card-body p-5 pb-6 text-dark">
                    <div class="statistics-info p-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div class="mt-3">
                                    <div class="text-dark">
                                        <div class="services-statistics reveal my-5">
                                            <div class="row text-center">

                                                <div class="col-xl-4 col-md-6 col-lg-6">
                                                    <div class="card">
                                                        <div class="card-body p-0">
                                                            <div class="counter-status">
                                                                <div
                                                                    class="counter-icon bg-primary-transparent box-shadow-primary">
                                                                    <i
                                                                        class="fe fe-map-pin text-primary fs-23"></i>
                                                                </div>
                                                                <h4
                                                                    class="mb-2 fw-semibold">
                                                                    {{ __('Ofis') }}</h4>
                                                                <p>{{ $contact->address }} </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4 col-md-6 col-lg-6">
                                                    <div class="card">
                                                        <div class="card-body p-0">
                                                            <div class="counter-status">
                                                                <div
                                                                    class="counter-icon bg-secondary-transparent box-shadow-secondary">
                                                                    <i
                                                                        class="fe fe-phone text-secondary fs-23"></i>
                                                                </div>
                                                                <h4
                                                                    class="mb-2 fw-semibold">
                                                                    {{ __('Telefon') }}</h4>
                                                                <p class="mb-0">+90 {{ $contact->phone }} </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4 col-md-6 col-lg-6">
                                                    <div class="card">
                                                        <div class="card-body p-0">
                                                            <div class="counter-statuss">
                                                                <div
                                                                    class="counter-icon bg-success-transparent box-shadow-success">
                                                                    <i
                                                                        class="fe fe-mail text-success fs-23"></i>
                                                                </div>
                                                                <h4
                                                                    class="mb-2 fw-semibold">
                                                                    {{ __('Email') }}</h4>
                                                                <p class="mb-0">
                                                                   <a href="#">{{ $contact->email }}</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-9">
                                <div class="">

                                    <form class="form-horizontal reveal revealrotate m-t-20" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" name="userName"
                                                    required placeholder="{{ __('Ad Soyad') }}*">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="email" name="email"
                                                    required placeholder="{{ __('Email adres') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <textarea class="form-control" name="content"
                                                    rows="5">{{ __('Mesajınız..') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0)"
                                                class="btn btn-primary btn-rounded  waves-effect waves-light">{{ __('Gönder') }}</a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
