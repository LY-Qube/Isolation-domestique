<div>
    <footer class="page_footer s-borderbottom-container ds s-pt-60 s-pb-5 s-pt-lg-100 s-pb-lg-45 s-pt-xl-150 s-pb-xl-95 c-gutter-50">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3 animate mr-auto animated fadeInUp" data-animation="fadeInUp">

                    <div class="widget widget_text">
                        <a href="/" class="logo" style="max-width: 150px;margin: auto;">
                            <img src="{{ asset('app/images/full/logo-eco.webp') }}"
                                 width="150"
                                 height="110"
                                 title="{{ config('app.name') }}"
                                 alt="{{ config('app.name') }}">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 animate animated fadeInUp" data-animation="fadeInUp">
                    <div class="widget widget_working_hours">
                        <h3>Nos Heures</h3>
                        <ul class="list-bordered">

                            <li class="row">
                                <div class="col-6">
                                    Lundi
                                </div>
                                <div class="col-6">
                                    <span class="color-darkgrey">10:00 - 20:00</span>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-6">
                                    Mardi
                                </div>
                                <div class="col-6">
                                    <span class="color-darkgrey">10:00 - 20:00</span>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-6">
                                    Mercredi
                                </div>
                                <div class="col-6">
                                    <span class="color-darkgrey">10:00 - 20:00</span>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-6">
                                    Jeudi
                                </div>
                                <div class="col-6">
                                    <span class="color-darkgrey">10:00 - 20:00</span>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-6">
                                    Vendredi
                                </div>
                                <div class="col-6">
                                    <span class="color-darkgrey">10:00 - 19:00</span>
                                </div>
                            </li>

                            <li class="row">
                                <div class="col-6">
                                    Samedi
                                </div>
                                <div class="col-6">
                                    <span class="color-darkgrey">Fermé</span>
                                </div>
                            </li>

                            <li class="row">
                                <div class="col-6">
                                    Dimanche
                                </div>
                                <div class="col-6">
                                    <span class="color-darkgrey">Fermé</span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-md-4 text-center text-md-left animate animated fadeInUp" data-animation="fadeInUp">
                    <div class="widget widget_icons_list">
                        <h3>Contact</h3>

                        <div class="media side-icon-box">
                            <div class="icon-styled color-main fs-14">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <p class="media-body">{{ config('app.data.address') }}</p>
                        </div>
                        <div class="media side-icon-box">
                            <div class="icon-styled color-main fs-14">
                                <i class="fa fa-phone"></i>
                            </div>
                            <p class="media-body">{{ config('app.data.phone') }}</p>
                        </div>
                        <div class="media side-icon-box">
                            <div class="icon-styled color-main fs-14">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <p class="media-body">
                                <a href="#">{{ config('app.data.contact_mail') }}</a>
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </footer>

    <section class="page_copyright ds s-py-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left animate" data-animation="fadeInUp">
                    <p>&copy; <span class="copyright_year">2021</span> Qub.</p>
                </div>
                <div class="col-md-6 text-center text-md-right  animate" data-animation="fadeInUp">
                    <div class="widget widget_nav_menu">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>