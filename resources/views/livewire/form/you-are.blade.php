<div>
    <h3 class="special-heading">
        Vous <span class="color-main">êtes</span>
    </h3>
    <form class="c-mb-15 c-gutter-15" wire:submit.prevent="save">
        <div class="row form-card">
            <div class="col-sm-6 col-md-4">
                <a href="#" class="form-border @if($you === "Propriétaire") card-active @endif"
                   wire:click.prevent="changeValue('Propriétaire')"
                   id="value-Propriétaire">
                    <div class="media hero-bg rounded">
                        <div class="icon-styled icon-bordered rounded fs-14 color-main">
                            <i class="ico-house"></i>
                        </div>
                        <div class="media-body">
                            <p>
                                Propriétaire
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a href="#" class="form-border @if($you === "Locataire") card-active @endif"
                   wire:click="changeValue('Locataire')"
                   id="value-Locataire">
                    <div class="media hero-bg rounded">
                        <div class="icon-styled icon-bordered rounded fs-14 color-main">
                            <i class="fa fa-key"></i>
                        </div>
                        <div class="media-body">
                            <p>
                                Locataire
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a href="#" class="form-border @if($you === "Usufruiter") card-active @endif"
                   wire:click="changeValue('Usufruiter')"
                   id="value-Usufruiter">
                    <div class="media hero-bg rounded">
                        <div class="icon-styled icon-bordered rounded fs-14 color-main">
                            <i class="fa fa-blind"></i>
                        </div>
                        <div class="media-body">
                            <p>
                                Usufruiter
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div wire:loading  wire:target="save">
            <div class="row mb-5">
                <div class="col-sm-12">
                    <div class="form-group text-center">
                        Enregistrement des Données ...
                    </div>
                </div>
            </div>
        </div>
        @if ($submit)
            <div id="submit_card" class="row mb-5" wire:loading.remove wire:target="save">
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

