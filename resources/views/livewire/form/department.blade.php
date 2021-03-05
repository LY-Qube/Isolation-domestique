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
    <script>
        let body = $('body');
        let region = $('.jqvmap-region');
        let submit = $('#submit_map')
        // click active
        body.on('click', '.jqvmap-region', function (e) {
            e.preventDefault();
            region.each(function () {
                $(this).removeClass('region-active');
            })
            $(this).addClass('region-active');
            let title = $(this).attr('data-title');
            $('#submit_map button').text(title);
            submit.css('display', 'block')
        })
        // send info
        body.on('click', '#submit_map', function (e) {
            e.preventDefault();
            let value = $('.region-active').attr('data-title');
            if (value.length === 0) {
                // if we can not found value valid
                location.reload();
            }
            else {
                let csrf = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "department",
                    method: "POST",
                    data: {'value': value, '_token': csrf },
                    // before waiting
                    beforeSend: function () {
                        submit.css('display', 'none');
                        $('#loading').css('display', 'block');
                    },
                    success: function (result) {
                        //console.log(result)
                        location.reload();
                    },
                    error: function (error) {
                        location.reload();
                    },
                });
            }
        })
    </script>
    @endpush
</div>

