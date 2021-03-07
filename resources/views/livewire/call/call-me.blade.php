<div>
    <section class="call-page-form">
        <div class="row">
            <div class="px-60 pt-55 pb-60 box-shadow ls col-md-6 offset-md-3">
                <h4 class="special-heading">
                    Appellez-moi
                </h4>
                <div class="divider-30 divider-lg-55"></div>
                <form class="call-form c-mb-10 c-gutter-10" wire:submit.prevent="save">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group has-placeholder">
                                <label for="name">Nom et Prénom <span class="required">*</span></label>
                                <i class="fa fa-user"></i>
                                <input type="text" aria-required="true" size="30" wire:model="call.name"
                                       name="name" id="name"
                                       class="form-control @error('call.name') border-danger @enderror"
                                       placeholder="Nom et Prénom">
                                @error('call.name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-placeholder">
                                <label for="email">Adresse E-mail<span class="required">*</span></label>
                                <i class="fa fa-envelope"></i>
                                <input type="email" aria-required="true" size="30" wire:model="call.email" name="email"
                                       id="email"
                                       class="form-control @error('call.email') border-danger @enderror"
                                       placeholder="Adresse E-mail">
                                @error('call.email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-placeholder">
                                <label for="phone">Numéro de Téléphone<span class="required">*</span></label>
                                <i class="fa fa-phone"></i>
                                <input type="text" aria-required="true" size="30" wire:model="call.phone"
                                       name="phone" id="phone"
                                       class="form-control @error('call.phone') border-danger @enderror"
                                       placeholder="Numéro de Téléphone">
                                @error('call.phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="day">Appellez-moi <span class="required">*</span></label>
                                <select name="day" id="day" wire:model="call.day"
                                        class="form-control @error('call.day') border-danger @enderror">
                                    <option value="">-------</option>
                                    @foreach($values['day'] as $key => $item)
                                        <option value="{{ $key }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                                @error('call.day')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="time">Je serais disponible <span class="required">*</span></label>
                                <select name="time" id="time" wire:model="call.time"
                                        class="form-control @error('call.time') border-danger @enderror">
                                    <option value="">-------</option>
                                    @foreach($values['time'] as $key => $item)
                                        <option value="{{ $key }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                                @error('call.time')
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
                            <div class="form-group "  wire:loading.remove wire:target="save">
                                <button type="submit"
                                        class="btn btn-small with-icon btn-maincolor">Appellez-moi</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
</div>