<div>
    <section class="ds ms s-overlay s-parallax s-py-55 s-py-lg-95 s-py-xl-145 project-horizontal-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h4 class="special-heading">Nos Services</h4>
                    <p class="special-heading">NOS OFFRES D'ISOLATION À 1 €</p>
                    <div class="divider-30 divider-lg-53"></div>
                </div>
                <div class="col-12">

                    <div class="owl-carousel count-list" data-nav="false" data-dots="true" data-autoplay="true"
                         data-loop="false" data-margin="30" data-responsive-xs="1" data-responsive-sm="2"
                         data-responsive-md="2" data-responsive-lg="2">
                        @foreach($services as $service)
                            <div style="height: 300px;"
                                 class="gallery-item-extended horizontal-item count-item cs venting attic-insulation">
                                <div class="item-content">
                                    <h6 class="item-title">
                                        <a href="{{ asset($service['url']) }}"
                                           title="{{ $service['title'] }}">
                                            {{ $service['title'] }}
                                        </a>
                                    </h6>

                                    <a href="{{ asset($service['url']) }}"
                                       title="{{ $service['title'] }}"
                                       class="btn-link btn-absolute with-icon item-button">
                                        Lire Plus ...
                                    </a>
                                </div>
                                <div class="item-media">
                                    <img src="{{ asset($service['image']) }}"
                                         title="{{ $service['title'] }}"
                                         alt="{{ $service['title'] }}">
                                    <div class="media-links">
                                        <a class="abs-link"
                                           title="{{ $service['title'] }}"
                                           href="{{ asset($service['url']) }}"></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
