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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


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
        height: 100vh;
    }

    .icono_cancelar {
        background-color:#121212; 
    }

    .recuperacion-container {
            background-color: #1c1c1c; /* Fondo del contenedor del formulario */
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 500px;
            text-align: center;
    }

    .recuperacion-container h2 {
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

    .loading-message {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #1f1f1f; /* Fondo para el modal */
            color: #a9d4ff;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
    }

</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo_bancapp_ultimo.png') }}"  height="60" alt="MDB Logo" loading="lazy"/>{{ config('app.name', 'Laravel') }}
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

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
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
        <div class="icono_cancelar">
            <div class="row align-items-center">
                <div class="col-auto">
                    <a href="{{ route('login') }}"  class="md-2 text-start col-form-label" style="text-decoration: none; ">
                        <i class="bi bi-arrow-left-circle"></i> Cancelar
                    </a>
                </div>
            </div>
        </div>
        
        <main class="py-4">
            @yield('content')
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function showLoadingMessage(event) {
                event.preventDefault(); // Evita que se envíe el formulario
                document.getElementById('loadingMessage').style.display = 'block';
                
                // Simulación de envío (puedes ajustar el tiempo)
                setTimeout(() => {
                    document.getElementById('loadingMessage').style.display = 'none';
                    alert("Código de verificación enviado"); // Opcional: alerta de confirmación
                }, 3000); // 3 segundos de espera simulado
            }
        </script>
    </div>
    
</body>
</html>

