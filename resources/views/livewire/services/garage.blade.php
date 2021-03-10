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
                            <div class="col-md-6 pl-5" >
                                <h2 style="font-size: 2.1em" class="text-primary">{{ $title }}</h2>
                                L’isolation de vos sous-sols et planchers bas pour 1 € requiert des critères
                                d’éligibilité axés, notemment, sur les revenus du foyer en question.
                                <p>
                                    Même si vos revenus sont trop élevés pour une isolation de vos sous-sols et
                                    planchers bas à 1 €, vous pouvez bénéficier de subventions.
                                </p>
                                <p>
                                    Nous utilisant des plaques de polystyrène de 10 cm d’épaisseur solidement fixées au
                                    plafond.
                                </p>
                                <p>
                                    Le matériel isolant doit être conforme aux normes imposées par le programme
                                    (coefficient de résistance thermique supérieur ou égal à 3.KW /m²).
                                </p>
                                <p>
                                    L’artisan qui intervient doit être certifié RGE dans le domaine de la pose
                                    d’isolants thermique.
                                </p>
                                <h2 style="font-size: 2.1em" class="text-primary">{{ $title2 }}</h2>
                                <p>
                                    L’isolation d’un garage va dépendre de sa localisation relative à votre maison.
                                </p>
                                <p>
                                    Soit le garage se trouve en sous terrain (donc en dessous du plancher de votre
                                    maison). Dans ce cas, la réglementation en vigueur est identique à celle des
                                    planchers bas.
                                </p>
                                <p>
                                    Dans le cas où votre garage est accolé à votre maison (donc un mur mitoyen à vote
                                    maison), ce mur pourra être isolé. Les conditions d’éligibilités seront différentes
                                    des conditions liées aux planchers bas et s’apparenteront à celles liées aux murs.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset($images) }}"
                                     title="{{ $title }}"
                                     alt="{{ $title }}">
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
