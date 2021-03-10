<div>
    <section class="ls  container-px-0 contacts-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="ls page_map absolute_map">
                    </div>
                </div>
                <div class="divider-40 divider-lg-0"></div>
                <div class="ls col-xl-3 px-30 custom-col-absolute">
                    <h4 class="special-heading">Contact Information</h4>
                    <div class="divider-40 divider-lg-50"></div>
                    <div class="contact-info mb-30">
                        <h6 class="mb-10">Rendez nous visite</h6>
                        <p>{{ config('app.data.address') }}</p>
                    </div>

                    <div class="contact-info mb-30">
                        <h6 class="mb-10">Envoyez-nous un email</h6>
                        <a href="#">{{ config('app.data.contact_mail') }}</a>
                    </div>

                    <div class="contact-info">
                        <h6 class="mb-10">Téléphone</h6>
                        <a href="#">{{ config('app.data.phone') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>