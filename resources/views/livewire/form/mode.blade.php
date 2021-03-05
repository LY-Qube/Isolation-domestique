<div>
    <div>
        <h3 class="special-heading">
            Mode <span class="color-main">De</span> Chauffage
        </h3>
        <form class="c-mb-15 c-gutter-15" wire:submit.prevent="save">
            <div class="row form-card">
                <div class="col-sm-6 col-md-3">
                    <a href="#" class="form-border @if($mode === "Fioul") card-active @endif"
                       wire:click="changeValue('Fioul')"
                       id="value-Propriétaire">
                        <div class="media hero-bg rounded">
                            <div class="media-body">
                                <p>
                                    Fioul
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#" class="form-border @if($mode === "Gaz") card-active @endif"
                       wire:click="changeValue('Gaz')"
                       id="value-Locataire">
                        <div class="media hero-bg rounded">
                            <div class="media-body">
                                <p>
                                    Gaz
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#" class="form-border @if($mode === "Bois") card-active @endif"
                       wire:click="changeValue('Bois')"
                       id="value-Usufruiter">
                        <div class="media hero-bg rounded">
                            <div class="media-body">
                                <p>
                                    Bois
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#" class="form-border @if($mode === "Electricité") card-active @endif"
                       wire:click="changeValue('Electricité')"
                       id="value-Usufruiter">
                        <div class="media hero-bg rounded">
                            <div class="media-body">
                                <p>
                                    Electricité
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div wire:loading wire:target="save">
                <div class="row mb-5">
                    <div class="col-sm-12">
                        <div class="form-group text-center">
                            Enregistrement des Données ...
                        </div>
                    </div>
                </div>
            </div>
            @if ($submit)
                <div id="submit_card" class="row mb-5"  wire:loading.remove wire:target.remove="save">
                    <div class="col-sm-12">
                        <div class="form-group text-center">
                            <button type="submit" name="contact_submit"
                                    class="btn btn-wide btn-small btn-maincolor with-icon">
                                Suivant
                            </button>
                        </div>
                    </div>
                </div>
            @endif
        </form>
    </div>
</div>
