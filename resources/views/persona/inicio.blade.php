<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
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
            /* Asegura que el contenido colapsable esté alineado y justo debajo del botón */
            .collapse-content {
                position: absolute;
                top: 56px; /* Ajusta según la altura del navbar */
                right: 10px;
                z-index: 1000;
                min-width: 200px;
            }

            main {
            background: linear-gradient(to bottom, #4d9ff6, #ffffff);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            }

            .profile-container {
                background-color: #2979ff;
                color: white;
                border-radius: 10px;
                padding: 20px;
                display: flex;
                align-items: center;
                gap: 20px;
                max-width: 500px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .profile-image {
                width: 120px;
                height: 120px;
                border-radius: 50%;
                background-size: cover;
                background-position: center;
            }

            .profile-info {
                flex: 1;
            }

            .edit-link {
                color: #ffffff;
                text-decoration: underline;
                font-weight: bold;
            }

            .btn-primary {
                background-color: #2979ff;
                border: none;
            }
        </style>

</head>
<body style="background-color: #ffffff">
        <nav class="navbar navbar" style="background-color: #ffffff; height:60px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logo_bancapp_ultimo.png') }}" class="me-2 ms-2" height="50" alt="MDB Logo" loading="lazy"/>
                    <small>Bancapp</small>
                </a>

                <button class="btn btn-dark ms-auto" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseActions" aria-expanded="false" aria-controls="collapseActions">
                    <i class="fas fa-bars"></i> <!-- Ícono de menú -->
                </button>
            </div>
        </nav>
                <!-- Menú desplegable -->
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

        <main>
            <div class="row gx-1 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5"><img class="img-fluid rounded-circle me-5" src="https://png.pngtree.com/png-clipart/20231116/original/pngtree-cheerful-businessman-holding-credit-card-smiling-photo-png-image_13577902.png" alt="avatar_cliente" /></div>
                </div>
                <div class="col-lg-6">
                    <div class="profile-container">
                        <div class="profile-info">
                            <div class="row mb-3 align-items-center">
                                <div class="col-auto">
                                    <h2>¡Hola Juan!</h2>
                                </div>
                                <div class="col text-end">
                                    <a href="#" class="edit-link"><i class="bi bi-pencil"></i> Editar</a>
                                </div>
                                <p>Nos alegra tenerte de nuevo, queremos ofrecerte la mejor experiencia.</p>
                            </div>
                            <p><i class="bi bi-person-circle"></i> JUAN PEREZ</p>
                            <p><i class="bi bi-telephone"></i> +57 3124568907</p>
                            <p><i class="bi bi-envelope"></i> juan.perez@gmail.com</p>
                                    
                        </div>
                    </div>
                </div>
                <!-- Información del usuario -->
                
            </div>
            
        </main>
    
        <footer class="text-center text-lg-start bg-body-tertiary text-muted" style="background-color: #ffffff">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="background-color:#ffffff">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block" style="color:rgb(22, 24, 26)">
                    <span>Get connected with us on social networks:</span>
                </div>
                    <!-- Left -->
      
                    <!-- Right -->
                <div style="color: rgb(29, 31, 33)">
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
                    <!-- Section: Social media -->
      
                    <!-- Section: Links  -->
            <section style="background-color:#ffffff" >
                <div class="container text-center text-md-start mt-5" style="background-color:#ffffff">
                <!-- Grid row -->
                    <div class="row mt-3">
                    <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="color: rgb(17, 17, 18)">
                        <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4" >
                                <i class="fas fa-gem me-3"></i>Bancapp
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                            <!-- Grid column -->
                    
                            <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="color: rgb(15, 16, 17)">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Productos
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Angular</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">React</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Vue</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Laravel</a>
                            </p>
                        </div>
                            <!-- Grid column -->
                    
                            <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="color: rgb(23, 25, 27)">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Pricing</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Settings</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Orders</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Help</a>
                            </p>
                            </div>
                            <!-- Grid column -->
                    
                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="color: rgb(12, 13, 14)">
                            <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">Contactos</h6>
                                <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                                <p>
                                <i class="fas fa-envelope me-3"></i>
                                info@example.com
                                </p>
                                <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                                <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                            </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->
      
            <!-- Copyright -->
          <div style="color: rgb(255, 255, 255)">
            <div class="text-center p-4" style="background-color: #000000;">
                © 2024 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Bancapp.com</a>
            </div>
          </div>  
            <!-- Copyright -->
        </footer>

        

        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
        ></script>
        <script
        src="https://kit.fontawesome.com/a076d05399.js"
        crossorigin="anonymous"
        ></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="{{ asset('js/welcome.js') }}"></script>
</body>
</html>
