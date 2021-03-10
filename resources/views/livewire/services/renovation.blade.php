<div>
    <!-- template sections -->
    <div class="header_absolute ds cover-background s-overlay">
        <section class="page_title ds s-pt-115 s-pb-65 s-pb-lg-85 s-pt-lg-145 bg-auto page_title s-parallax s-overlay"
                 style="background-position: 50% -1px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-lg-left">
                        <h1 class="color-main">{{ $title }}</h1>
                        <ol class="breadcrumb links-light">
                            <li class="breadcrumb-item">Tout se qu'il faut savoir et comprendre</li>
                        </ol>
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
                                <img src="{{ asset($images) }}"
                                     title="{{ $title }}"
                                     alt="{{ $title }}">
                            </div>
                            <div class="col-md-6 pl-5">
                                <h2 style="font-size: 2.1em" class="text-primary">{{ $title }}</h2>
                                <p>
                                    Comme sont nom l’indique il s’agit de faire un diagnostique thermique complet de
                                    votre
                                    habitation (isolation des parties hautes et basse, isolation des murs intérieurs,
                                    menuiserie, mode de chauffage …).
                                </p>
                                <p>
                                    Ensuite nous vérifions votre éligibilité fiscalement et techniquement, pour vous faire
                                    bénéficier de la prise en charge la plus importante.
                                </p>
                                <p>
                                    Si vous avez déjà bénéficié de «MaPrimeRenov», vous n’êtes pas éligible à la rénovation
                                    thermique globale.
                                </p>
                                <p>
                                    Contactez-nous pour plus d’information.
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
