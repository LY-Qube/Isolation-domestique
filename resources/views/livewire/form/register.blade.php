<div>
    <h3 class="special-heading">
        Inscriv<span class="color-main">ez-vous</span>
    </h3>
    <div class="divider-35 divider-lg-50"></div>
    <form class="c-mb-15 c-gutter-15" wire:submit.prevent="save">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="form-group has-placeholder">
                    <label for="name">Nom et Prénom <span class="required">*</span></label>
                    <i class="fa fa-user"></i>
                    <input type="text"  aria-required="true" size="30" wire:model="contact.name"
                           name="name" id="name" class="form-control @error('contact.name') border-danger @enderror"
                           placeholder="Nom et Prénom">
                    @error('contact.name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-group has-placeholder">
                    <label for="phone">Numéro de Téléphone<span class="required">*</span></label>
                    <i class="fa fa-phone"></i>
                    <input type="text" aria-required="true" size="30" wire:model="contact.phone"
                           name="phone" id="phone" class="form-control @error('contact.phone') border-danger @enderror"
                           placeholder="Numéro de Téléphone">
                    @error('contact.phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
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
        </div>
        <div wire:loading  wire:target="save">
            <div class="row mt-35 mb-5">
                <div class="col-sm-12">
                    <div class="form-group text-center">
                        Enregistrement des Données ...
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-35 mb-5">
            <div class="col-sm-12">
                <div class="form-group text-center" wire:loading.remove wire:target="save">
                    <button type="submit" id="contact_form_submit" name="contact_submit"
                            class="btn btn-wide btn-small btn-maincolor with-icon disabled">
                        Inscription
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
