<x-login-layout>
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ route('welcome') }}">{{ config('app.name') }}</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Connectez-Vous</p>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="email" type="email" value="{{ old('email') }}" class="form-control"
                               placeholder="Email" autocomplete>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control"
                               placeholder="Password" autocomplete>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                    <div class="row">
                        <div class="col-12">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    </div>
                    @enderror
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Connectez-Vous</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
</x-login-layout>
