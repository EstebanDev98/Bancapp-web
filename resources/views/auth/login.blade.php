@extends('layouts.app')

@section('content')
<div class="login-container">
    <h2>¡Bienvenido a Bancapp!</h2>
    <p>Estamos aquí para ayudarte a gestionar tus finanzas de manera fácil y segura</p>
    <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="row mb-3">
                <label for="email" class="md-2 text-start col-form-label">{{ __('Correo electronico') }}</label>
                <div class="mb-3">
                    <input id="email" type="email" class="form-control" placeholder= "Ingrese su correo electronico" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

            <div class="row mb">
                <label for="password" class="md-2 text-start col-form-label">{{ __('Contraseña') }}</label>

                <div class="mb-3">
                    <input id="password" type="password" class="form-control" placeholder= "Ingrese su contraseña" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

            <div class="row mb-3 align-items-center">
                <div class="col-auto">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Recuerdame') }}
                        </label>
                    </div>
                </div>
                <div class="col text-end">
                @if (Route::has('password.request'))
                        <a class="text-link" href="{{ route('password.request') }}">
                        {{ __('¿Ha olvidado su contraseña?') }}
                        </a>
                    @endif
                </div>
            </div>

            <div class=" mb-2 align-items-center">
                <div class="row mb-0 align-items-center">
                    <div class="col-auto offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Iniciar Sesión') }}
                        </button>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <span>¿No tiene cuenta? <a href="{{ route('register') }}" class="text-link">Regístrese</a></span>
            </div>

            <button type="button" class="btn google-btn mt-3">
                <img src="https://img.icons8.com/?size=512&id=17949&format=png" alt="Google" width="20" style="vertical-align: middle; margin-right: 8px;">
                O conéctese con Google
            </button>



    </form>
</div>
@endsection
