<head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $setting->description }}">
    <meta name="keywords" content="{{ $setting->keywords }}">
    <meta name="author" content="Cafer AYDIN Private Limited">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('asset/favicon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $setting->title }}</title>

    <link id="style" rel="stylesheet" href="{{ asset('asset/plugin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/icons.css') }}">

    {{-- INTERNAL Switcher css --}}
    <link rel="stylesheet" href="{{ asset('asset/switcher/css/switcher.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/switcher/demo.css') }}">

</head>
