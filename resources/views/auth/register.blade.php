@extends('layouts.registre')

@section('content')
<div class="register-container">
    <h2>Crear una cuenta</h2>
    <img src="https://cdn-icons-png.flaticon.com/128/9385/9385270.png" alt="usuario" height="60" class="mb-1">
    <form method="POST" action="{{ route('register') }}">
        @csrf
            <div class="row mb-1">
                <label for="name" class="md-2 text-start col-form-label">{{ __('Nombre') }}</label>
                <div class="mb-3">
                    <input id="name" type="text" class="form-control" placeholder= " Ingrese su nombre completo" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

            <div class="row mb-1">
                <label for="email" class="md-2 text-start col-form-label">{{ __('Correo electronico') }}</label>
                <div class="mb-3">
                    <input id="email" type="email" class="form-control" placeholder = "Ingrese su correo electronico" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-1">
                <label for="password" class="md-2 text-start col-form-label">{{ __('Contraseña') }}</label>

                <div class="mb-3">
                    <input id="password" type="password" class="form-control" placeholder = "Ingrese su contraseña" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-1">
                <label for="password-confirm" class="md-2 text-start col-form-label">{{ __('Confirmar contraseña') }}</label>

                <div class="mb-3">
                    <input id="password-confirm" type="password" class="form-control"  placeholder = "Ingrese nuevamente la contraseña" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class=" mb-2 align-items-center">
                <div class="row mb-0 align-items-center">
                    <div class="col-auto offset-md-4 mb-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Registrarse') }}
                        </button>
                    </div>
            </div>


            <div class="row mb-3 align-items-center">
                <div class="col-auto">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Acepto todas las politicas y condiciones de privacidad') }}
                        </label>
                    </div>
                </div>
                <div class="col text-end">
                    <i class="bi bi-info-circle fs-3 text-primary" type="button"></i>
                </div>
            </div>
    </form>
</div>
@endsection
