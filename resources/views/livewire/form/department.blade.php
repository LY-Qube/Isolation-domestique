<div>
    <div class="image__map">
        <h3 class="special-heading">
            Départ<span class="color-main">ements</span>
        </h3>
        <x-home.form.map />
        <div style="display: none;" id="loading">
            <div class="row mb-5">
                <div class="col-sm-12">
                    <div class="form-group text-center">
                        Enregistrement des Données ...
                    </div>
                </div>
            </div>
        </div>
        <div style="display: none;" id="submit_map" class="row mb-5">
            <div class="col-sm-12">
                <div class="form-group text-center">
                    <button type="submit" name="contact_submit"
                            class="btn btn-wide btn-small btn-maincolor with-icon">
                        Suivant
                    </button>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')

    @endpush
</div>

