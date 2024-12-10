<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BancApp - Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
        rel="stylesheet">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- AOS CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<style>
    main {
        background: linear-gradient(to bottom, #4d9ff6, #ffffff);
        margin: 0;
    }
    /* Estilos del menú lateral */
    .sidebar {
        min-height: 100vh;
        padding-top: 20px;
        border-right: 2px solid #ffebeb; /* Borde lateral derecho para destacar separación */
        box-shadow: 2px 0 5px rgb(169, 209, 249); /* Sombra sutil */
        background-color: rgb(120, 176, 231); /* Color de fondo ligeramente diferente */
    }

    .sidebar a {
        color: #ffffff;
        font-weight: 500;
    }
    /* Estilos del navbar */
    .navbar {
        background-color: #ffffff;
        border-bottom: 1px solid #e0e0e0;
    }
    .navbar img {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }
    /* Contenedor principal del dashboard */
    .dashboard-container {
        padding: 20px;
    }
    .card {
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-color: rgb(92, 123, 217)
    }
    /* Tabla de extractos */
    .table-container {
        background-color: #2979ff;
        color: white;
        border-radius: 10px;
        padding: 15px;
    }
    .btn-show-more {
        background-color: #2979ff;
        border: none;
    }


    .collapse-content {
                position: absolute;
                top: 56px; /* Ajusta según la altura del navbar */
                right: 10px;
                z-index: 1000;
                min-width: 200px;
    }

    .icon-link-hover {
    position: relative;
    font-weight: bold;
    color: #007bff; /* Color inicial */
    transition: color 0.3s ease;
    }

    .icon-link-hover .bi-arrow-right {
    display: inline-block;
    transition: transform 0.3s ease;
    }

    .icon-link-hover:hover {
    color: #0056b3; /* Cambia el color al pasar el ratón */
    }

    .icon-link-hover:hover .bi-arrow-right {
    transform: translateX(5px); /* Mueve la flecha 5px a la derecha */
    }

    .card-image {
            position: relative;
            background-color: transparent;
    }
    
    .code-display {
            font-weight: bold;
            font-size: 1.5rem;
    }
        
    .hide-code {
            -webkit-text-security: disc;
            text-security: disc;
    }
        
    .card-info {
            background-color: #0099ff;
            color: white;
    }
    
    .card-retiro {
            background-color: #0066cc;
            color: white;
    }

    :root {
            --card-bg-color: #f0f8ff;
            --credits-box-bg-color: #007bff;
            --text-color-dark: #333;
            --button-bg-color: #ffffff;
            --icon-color: #000;
    }
        
    .credits-card {
            background-color: var(--card-bg-color);
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
    }

    .credits-header {
            font-weight: bold;
            color: var(--text-color-dark);
    }

    .credits-info-icon {
            color: var(--icon-color);
            font-size: 1.2rem;
            cursor: pointer;
    }

    .credits-box {
            background-color: var(--credits-box-bg-color);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
    }

    .credits-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
    }

    .credits-item i {
            font-size: 1.5rem;
    }

    .consult-button {
            background-color: var(--button-bg-color);
            color: var(--text-color-dark);
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
    }
        
    .consult-button:hover {
            background-color: #e6e6e6;
    }

    .payment-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
            margin: 5px;
            cursor: pointer;
    }

    .payment-icon img {
            width: 70%;
    }

    .card-custom {
            background-color: #f0f8ff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .detail-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-top: 10px;
    }

    .btn-view-more {
            display: flex;
            justify-content: space-between;
            align-items: center;
    }

    .btn-view-more .bi {
            font-size: 1.2rem;
    }



    .card-selection {
        background-color: #f8f9fa;
    }

    .card-form {
        background-color: #ffffff;
        border: 1px solid #ccc;
        margin-left: 20px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .modal-body {
        text-align: center;
    }

    .list-card {
      border: 1px solid rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 1rem;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    }


</style>
</head>
<body>

<!-- Navbar superior -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Alpina_S.A._logo.svg/640px-Alpina_S.A._logo.svg.png" alt="Avatar" class="mg-2">
            <h4>ALPINA</h4>
        </div>
        <div class="ms-auto d-flex align-items-center" type="button">
            <i class="bi bi-bell me-3" width="50"></i>
            <div class="dropdown">
                <button class="btn btn-dark ms-auto" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseActions" aria-expanded="false" aria-controls="collapseActions">
                    <i class="fas fa-bars"></i> <!-- Ícono de menú -->
                </button>
                <div style="border-radius: 8px; overflow: hidden;"> 
                    <div class="collapse collapse-content" id="collapseActions" style="border-radius: 8px; background-color: #080808;">
                        <ul class="list-group">
                            <li class="list-group-item" style="background-color: transparent; border: none;">
                                <a href="#" style="color: rgb(252, 255, 255); text-decoration: none;">Iniciar sesión</a>
                            </li>
                            <li class="list-group-item" style="background-color: transparent; border: none;">
                                <a href="#" style="color: rgb(252, 255, 255); text-decoration: none;">Registrarse</a>
                            </li>
                            <li class="list-group-item" style="background-color: transparent; border: none;">
                                <a href="#" style="color: rgb(255, 255, 255); text-decoration: none;">Recuperar contraseña</a>
                            </li>
                            <li class="list-group-item" style="background-color: transparent; border: none;">
                                <a href="#" style="color: rgb(255, 255, 255); text-decoration: none;">Ayuda</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <!-- Menú lateral -->
        <nav class="col-md-2 sidebar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('bienvenidos')}}"> <i class="fas fa-home me-1"></i>  Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('inicio_empresa')}}"><i class="fas fa-user me-2"></i>  Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cuentas_empresa')}}"> <i class="fas fa-cog me-1"></i>  Cuentas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('transferir_empresa')}}"> <i class="fas fa-exchange-alt me-1"></i>  Transferencias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('nomina_empresa')}}"> <i class="fas fa-wallet me-1"></i>  Nomina</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('gestion_de_ceuntas')}}"> <i class="fas fa-question-circle me-1"></i>  Gestion cuentas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('extractos_empresa')}}"> <i class="fas fa-file-alt me-1"></i>   Extractos</a>
                </li>
            </ul>
        </nav>
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/welcome.js') }}"></script>


</body>
</html>