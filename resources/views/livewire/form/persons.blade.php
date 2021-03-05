<div>
    <div>
        <h4 class="special-heading">
            Nombre De Personnes <span class="color-main">Au Foyer Fiscal</span>
        </h4>
        <form class="c-mb-15 c-gutter-15" wire:submit.prevent="save">
            <div class="row form-card">
                @foreach($values as $value)
                    <div class="col-sm-6 col-md-2">
                        <a href="#" class="form-border @if($persons === $value) card-active @endif"
                           wire:click="changeValue('{{$value}}')"
                           id="value-Propriétaire">
                            <div class="media hero-bg rounded">
                                <div class="media-body">
                                    <p>
                                        {{ $value }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
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
