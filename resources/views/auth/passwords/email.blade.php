@extends('layouts.recuperar_contraseña')

@section('content')
<div class="recuperacion-container mg-3">
    <h2>Recuperar Contraseña</h2>
    <img src="https://cdn-icons-png.flaticon.com/128/16973/16973080.png" alt="recuperar contraseña" height="60" class="mb-3">
    <div class="mb-3">
        <h6>Para recuperar tu contraseña, ingresa a continuación tu correo electronico para enviarte un codigo de verificación</h6>
    </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="row mb-2">
            <label for="email" class="md-2 text-start col-form-label">{{ __('Correo electronico') }}</label>

            <div class="mb-3">
                <input id="email" type="email" class="form-control" placeholder="Ingrese su correo electronico" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
                        
        <div class=" mb-2 me-1 align-items-center">
                <button type="submit" class="btn btn-primary">
                    {{ __('Enviar codigo de restablecimiento de contraseña') }}
                </button>
        </div>

        <div id="loadingMessage" class="loading-message">
            <div class="d-flex align-items-center">
                <div class="spinner-border text-primary me-3" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <span>Código enviado a tu correo</span>
            </div>
        </div>          
    </form>            
</div>
@endsection
