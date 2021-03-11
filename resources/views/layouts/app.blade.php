<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="fr"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fr">
<!--<![endif]-->

<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <link rel="icon" href="{{ asset('app/images/logo-eco.ico') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- preload -->
    <link rel="preload"
          as="style"
          href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="preload"
          as="style"
          href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800,900">
    <link rel="preload"
          as="style"
          href="{{ asset('isolation/fonts/icomoon/icomoon.css') }}">

    <link rel="preload"
          as="style"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="preload"
          as="style"
          href="{{ asset('isolation/css/animations.css') }}">
    <link rel="preload"
          as="style"
          href="{{ asset('isolation/css/font-awesome.css') }}">
    <link rel="preload"
          as="style"
          href="{{ asset('app/css/app.css') }}" class="color-switcher-link">
    <link rel="preload"
          as="style"
          href="{{ asset('isolation/css/main.css') }}" class="color-switcher-link">

    <link rel="preload"
          as="script"
          href="{{ asset('isolation/js/vendor/modernizr-2.6.2.min.js')  }}">
    <link rel="stylesheet" href="{{ asset('isolation/fonts/icomoon/icomoon.css') }}">
    <link rel="preload" as="script" href="{{ asset('isolation/js/compressed.js') }}" >
    <link rel="preload" as="script" href="{{ asset('isolation/js/main.js') }}" >
    <link rel="preload" as="script" href="{{ asset('isolation/js/switcher.js') }}" >
    <link rel="preload" as="script" href="{{ asset('app/js/app.js') }}" >
    <!-- Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800,900">
    <!-- css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('isolation/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('isolation/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('isolation/css/main.css') }}" class="color-switcher-link">

    <script src="{{ asset('isolation/js/vendor/modernizr-2.6.2.min.js')  }}"></script>

    <!--[if lt IE 9]>
    <script src="{{ asset('isolation/js/vendor/html5shiv.min.js') }}"></script>
    <script src="{{ asset('isolation/js/vendor/respond.min.js') }}"></script>
    <script src="{{ asset('isolation/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <![endif]-->


    <style>
        #switcher {
            visibility: hidden;
        }
    </style>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('app/css/app.css') }}">

    <!-- scripts -->
    <script src="{{ asset('isolation/js/compressed.js') }}" ></script>
    <script src="{{ asset('isolation/js/main.js') }}" ></script>
    <script src="{{ asset('isolation/js/switcher.js') }}" ></script>
    <script src="{{ asset('app/js/app.js') }}" ></script>
</head>

<body style="font-display:Swap !important;">
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser.
    Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a>
    to improve your experience.
</div>
<![endif]-->

<div class="preloader">
    <div class="preloader_image"></div>
</div>


<div id="canvas">
    <div id="box_wrapper">
        @if(session('success'))
            <x-layout.guest.session-success/>
        @endif
        <!-- header -->
        <x-layout.guest.header/>
        <!-- body -->
        {{ $slot }}
        <!-- footer -->
            <x-layout.guest.call />
            <x-layout.guest.footer/>
    </div>
</div>
<!-- Scripts -->

@stack('scripts')


@livewireScripts


</body>

</html>