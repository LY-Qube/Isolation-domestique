<div>
    <!-- template sections -->
    <div class="header_absolute ds cover-background s-overlay">
        <section class="page_title ds s-pt-115 s-pb-65 s-pb-lg-85 s-pt-lg-145 bg-auto page_title s-parallax s-overlay"
                 style="background-position: 50% -1px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-lg-left">
                        <h1 class="color-main">{{ $title }}</h1>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <section class="ls s-pt-60 s-pb-55 s-pt-lg-100 s-pb-lg-95 s-pt-xl-150 s-pb-xl-145">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset($image) }}"
                                     title="{{ $title }}"
                                     alt="{{ $title }}">
                            </div>
                            <div class="col-md-6 pl-5 text-justify">
                                <h2 style="font-size: 2.1em" class="text-primary">Murs intérieurs</h2>
                                <p>
                                    L’isolation des murs pour 1 € requiert des critères d’éligibilité axés, notemment, sur
                                    les revenus du foyers en question.
                                    <br>
                                    <br>
                                    Même si vos revenus sont trop élevés pour une isolation de vos murs à 1 €, vous pouvez
                                    bénéficier de subventions.
                                    <br>
                                    <br>
                                    L’isolation des murs intérieurs est une méthode assez simple. Il s’agit de coller
                                    l’isolant sur la face intérieure des murs à isoler. Nous recouvrons ensuite l'isolant
                                    avec des plaques de BA-13 (Placo-platre).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Project -->
    <livewire:services.services/>

</div>
