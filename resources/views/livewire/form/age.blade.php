<div>
    <div>
        <h4 class="special-heading pt-2">
            Âge <span class="color-main">De La</span> Maison
        </h4>
        <form class="c-mb-15 c-gutter-15" wire:submit.prevent="save">
            <div class="row form-card">
                @foreach($values as $key => $value)
                    <div class="col-sm-6 col-md-2 @if($key===0) offset-md-1 @endif">
                        <a href="#" class="form-border @if($age === $value) card-active @endif"
                           wire:click="changeValue('{{$value}}')">
                            <div class="media hero-bg rounded" style="height:130px !important;">
                                <div class="media-body m-0">
                                    <span>
                                        {{ $value }}
                                    </span>
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
                <div id="submit_card" class="row mb-5"  wire:loading.remove wire:target="save">
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
