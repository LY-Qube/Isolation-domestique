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
                                <img src="{{ asset($image) }}" alt="">
                            </div>
                            <div class="col-md-6 pl-5 text-justify">
                                <h4 class="text-primary">Murs intérieurs</h4>
                                L’isolation des murs pour 1 € requiert des critères d’éligibilité axés entre autre sur
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
                            </div>
                        </div>
                    </div>
                </div>
            <!--
                <div class="col-12" style="margin-top: 70px;">
                    <div class="box-shadow">
                        <div class="row">
                            <div class="col-md-6 pl-5">
                                <h4 class="text-primary">Murs extérieurs</h4>
                                L’isolation des murs par l’extérieur est une solution d’isolation très performante. Elle
                                procure à la maison isolée un manteau de protection climatique agréable en toute saison.
                                Protégeant du froid pour la période hivernale, et de la chaleur pour la période
                                estivale.
                                <br>
                                Ces travaux sont relativement plus couteux que l’isolation des murs par l’intérieur.
                                <br>
                                Les méthodes employées pour isoler des murs par l’extérieur sont diverses et vont
                                dépendre surtout de l’état de vos murs et du type de surface (plane ou ondulée).
                            </div>
                            <div class="col-md-6">
                                <img src="{{ $image }}" style="min-width: 100%;" alt="">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12" style="margin-top: 70px;">
                    <div class="">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ $image }}" alt="">
                            </div>
                            <div class="col-md-6 pl-5">
                                <h4 class="text-primary">Murs attenants</h4>
                                L’isolation des murs attenants sous-entend l’isolation d’un mur mitoyen entre piece
                                chauffée et piece non chauffée.
                                <br>
                                L’isolation de ces murs entre dans le programme de l’isolation à 1€ (en remplissant
                                quelques critères d’éligibilités).
                                <br>
                                La méthode d’isolation pour ces murs est identique à celle employée pour l’isolation des
                                murs par l’intérieure.
                            </div>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
    </section>

    <!-- Section Project -->
    <livewire:services.services/>

</div>
