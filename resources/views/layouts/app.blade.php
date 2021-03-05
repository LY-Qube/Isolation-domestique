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

    <link rel="stylesheet" href="{{ asset('isolation/css/bootstrap.min.css') }}">
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

</head>

<body>
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
            <x-layout.guest.footer/>
    </div>
</div>
<!-- Scripts -->

<script src="{{ asset('isolation/js/compressed.js') }}"></script>
@livewireScripts
@stack('scripts')
<script src="{{ asset('isolation/js/main.js') }}"></script>
<script src="{{ asset('isolation/js/switcher.js') }}"></script>
<script src="{{ asset('app/js/app.js') }}"></script>

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 12665331;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/12665331/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

</body>

</html>