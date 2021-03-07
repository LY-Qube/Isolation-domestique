<div>
    <section class="contact-page-form" style="">
        <div class="row">
            <div class="px-60 pt-55 pb-60 box-shadow ls col-md-6 offset-md-3">
                <h4 class="special-heading text-center">
                    Recevoir mon guide complet gratuit dans ma boîte mail
                </h4>
                <div class="divider-30 divider-lg-55"></div>
                <form class=" c-mb-10 c-gutter-10" wire:submit.prevent="save">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group has-placeholder">
                                <label for="name">Nom et Prénom <span class="required">*</span></label>
                                <i class="fa fa-user"></i>
                                <input type="text" aria-required="true" size="30" wire:model="contact.name"
                                       name="name" id="name"
                                       class="form-control @error('contact.name') border-danger @enderror"
                                       placeholder="Nom et Prénom">
                                @error('contact.name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-placeholder">
                                <label for="email">Adresse E-mail<span class="required">*</span></label>
                                <i class="fa fa-envelope"></i>
                                <input type="email" aria-required="true" size="30" wire:model="contact.email" name="email"
                                       id="email"
                                       class="form-control @error('contact.email') border-danger @enderror"
                                       placeholder="Adresse E-mail">
                                @error('contact.email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-placeholder">
                                <label for="phone">Numéro de Téléphone<span class="required">*</span></label>
                                <i class="fa fa-phone"></i>
                                <input type="text" aria-required="true" size="30" wire:model="contact.phone"
                                       name="phone" id="phone"
                                       class="form-control @error('contact.phone') border-danger @enderror"
                                       placeholder="Numéro de Téléphone">
                                @error('contact.phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-20 mt-xl-50">
                        <div class="col-12">
                            <div wire:loading  wire:target="save">
                                <div class="row mt-35 mb-5">
                                    <div class="col-sm-12">
                                        <div class="form-group text-center">
                                            Enregistrement des Données ...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"  wire:loading.remove wire:target="save">
                                <button type="submit"
                                        class="btn btn-small with-icon btn-maincolor">Recevoir
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
</div>