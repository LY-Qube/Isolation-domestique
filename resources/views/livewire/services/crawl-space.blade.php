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
                                <p class="text-justify">
                                    L’isolation du vide sanitaire pour 1 € requiert des critères d’éligibilité axés,
                                    notemment, sur les revenus du foyer en question.
                                </p>
                                <p class="text-justify">
                                    Même si vos revenus sont trop élevés pour une isolation de vos combles à 1 €, vous
                                    pouvez bénéficier de subventions.
                                </p>
                                <p class="text-justify">
                                    La différence va être sur la méthode de pose de l’isolant.
                                </p>
                                <p class="text-justify">
                                    Effectivement lorsque l’on isole un vide sanitaire, nous cherchons à laisser un
                                    espace d’air entre l’isolant et le terrain car l’air renforce l’isolation.
                                </p>
                                <p class="text-justify">
                                    Dans un sous-sol non chauffé, nous allons coller l’isolant directement au plafond de
                                    celui-ci
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
