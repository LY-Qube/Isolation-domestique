<div>
    <div class="header_absolute ds cover-background s-overlay">
        <!-- header with two Bootstrap columns - left for logo and right for navigation and includes ( phone ) -->
        <header class="page_header ds justify-nav-center">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="my-15 my-md-0 col-xl-2 col-md-4 col-11">
                        <a href="{{ route('welcome') }}" class="logo">
                            <img src="{{ asset('app/images/logo-eco.png') }}" alt="{{ config('app.name') }}"
                                 title="{{ config('app.name') }}">
                        </a>
                    </div>
                    <div class="col-xl-8 col-1 order-3 order-lg-2">
                        <div class="nav-wrap">
                            <!-- main nav start -->
                            <nav class="top-nav">
                                <ul class="nav sf-menu">
                                    <li>
                                        <a href="{{ route('welcome') }}">Home</a>
                                    </li>
                                    <!-- eof pages -->
                                    <li>
                                        <a href="#">Services</a>
                                        <ul>
                                            @foreach($services as $service)
                                                <li>
                                                    <a href="{{ route($service['url']) }}"
                                                       title="{{ $service['title']  }}">
                                                        {{ $service['title'] }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <!-- eof service -->
                                </ul>
                            </nav>
                            <!-- eof main nav -->
                        </div>
                    </div>
                    <div class="col-xl-2 col-5 order-2 order-lg-3 d-none d-md-block top-phone">
                        <a href="#"
                           class="fs-20 fw-500 d-flex align-items-center justify-content-xl-end links-light">
                            <i class="ico-phone color-main fs-37 mr-2"></i>
                            <span>{{ config('app.data.phone') }}</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- header toggler -->
            <span class="toggle_menu"><span></span></span>
        </header>

    </div>
    <div class="header_absolute ds cover-background s-overlay">
        <!-- header with two Bootstrap columns - left for logo and right for navigation and includes ( phone ) -->
        <header class="page_header ds justify-nav-center">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="my-15 my-md-0 col-xl-2 col-md-4 col-11">
                        <a href="{{ route('welcome') }}" class="logo" title="{{ config('app.name') }}">
                            <img src="{{ asset('app/images/logo-eco.png') }}"
                                 alt="{{ config('app.name') }}"
                                 title="{{ config('app.name') }}">
                        </a>
                    </div>
                    <div class="col-xl-8 col-1 order-3 order-lg-2">
                        <div class="nav-wrap">
                            <!-- main nav start -->
                            <nav class="top-nav">
                                <ul class="nav sf-menu">
                                    <li>
                                        <a href="{{ route('welcome') }}">Home</a>
                                    </li>
                                    <!-- eof pages -->
                                    <li>
                                        <a href="#">Services</a>
                                        <ul>
                                            @foreach($services as $service)
                                                <li>
                                                    <a href="{{ route($service['url']) }}"
                                                       title="{{ $service['title']  }}">
                                                        {{ $service['title']  }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <!-- eof service -->
                                </ul>
                            </nav>
                            <!-- eof main nav -->
                        </div>
                    </div>
                    <div class="col-xl-2 col-5 order-2 order-lg-3 d-none d-md-block top-phone">
                        <a href="#"
                           class="fs-20 fw-500 d-flex align-items-center justify-content-xl-end links-light">
                            <i class="ico-phone color-main fs-37 mr-2"></i>
                            <span>{{ config('app.data.phone') }}</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- header toggler -->
            <span class="toggle_menu"><span></span></span>
        </header>

    </div>
</div>
