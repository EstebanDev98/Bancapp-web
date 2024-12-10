<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<style>
    /* Estilos personalizados para el diseño dark */
    main {
        background-color: #121212; /* Fondo oscuro */
        color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .login-container {
            background-color: #1c1c1c; /* Fondo del contenedor del formulario */
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
            text-align: center;
    }

    .login-container h2 {
            color: #ffffff;
            font-weight: bold;
            margin-bottom: 1rem;
    }

    .form-control {
            background-color: #333333;
            color: #ffffff;
            border: none;
            border-radius: 5px;

    }

    .form-control:focus {
            background-color: #444444;
            color: #ffffff;
            border: 1px solid #007bff; /* Color azul */
    }

    .btn-primary {
            background-color: #007bff; /* Azul */
            border: none;
            width: 100%;
    }

    .btn-primary:hover {
            background-color: #0056b3;
    }

    .text-link {
            color: #007bff;
            text-decoration: none;
    }

    .text-link:hover {
            text-decoration: underline;
    }

    .google-btn {
            background-color: #ffffff;
            color: #333333;
            width: 100%;
            border: none;
            margin-top: 0.5rem;
    }

    .google-btn:hover {
            background-color: #333333;
    }
</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo_bancapp_ultimo.png') }}" height="60" alt="MDB Logo" loading="lazy"/>{{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        
        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>
</html>

