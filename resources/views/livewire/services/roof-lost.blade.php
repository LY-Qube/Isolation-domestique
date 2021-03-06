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
                                <img src="{{ asset($images) }}" alt="">
                            </div>
                            <div class="col-md-6 pl-5 text-justify">
                                <h4 class="text-primary">{{ $title }}</h4>
                                <p class="text-justify">
                                    L’isolation des combles pour 1 € requiert des critères d’éligibilité axés
                                    entre-autre
                                    sur les revenus du foyer en question.
                                </p>
                                <p class="text-justify">
                                    Même si vos revenus sont trop élevés pour une isolation de vos combles à 1 €, vous
                                    pouvez bénéficier de subventions.
                                </p>
                                <p class="text-justify">
                                    Isoler ses combles perdus entraine une économie d’énergie très rapidement observable
                                    sur
                                    vos factures d’énergie. Effectivement c’est une source de déperdition énergétique
                                    très
                                    importante.
                                </p>

                                <p class="text-justify">
                                    Il existe plusieurs méthodes pour isoler ses combles perdus.
                                </p>
                                <p class="text-justify">
                                    Si vos combles sont facilement accessibles (trappe relativement grande), la méthode
                                    choisie sera dite du « déroulé ». Comme son nom l’entend, il s’agit de dérouler de
                                    la
                                    laine isolante sur le sol de vos combles.
                                </p>
                                <p class="text-justify">
                                    Si vos combles ne sont pas facilement accessibles, la méthode choisie sera «
                                    l’isolation
                                    par soufflage ». Cette méthode d’isolation consiste à souffler de la laine. On
                                    souffle
                                    l’isolant jusque dans les moindres recoins sur plus de 32 cm d’épaisseur pour une
                                    isolation optimum, en veillant scrupuleusement a laissé votre pieuvre électrique
                                    bien
                                    apparente.
                                </p>
                                <p class="text-justify">
                                    Le matériel isolant doit être conforme aux normes imposées par le programme
                                    (coefficient
                                    de résistance thermique supérieur ou égal à 3 K/W m²).
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

    <!-- Footer -->
</div>
