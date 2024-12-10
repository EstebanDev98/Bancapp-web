
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

            .bg-image img {
            /*width: 100px;*/
            height: 500px;
            object-fit: cover; /* Mantiene la calidad de la imagen */
            }

            .mask {
            position: absolute; /* Para posicionar la máscara sobre la imagen */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            }

            .img{
                filter:drop-shadow(
                    0 0 10px rgba(0, 0, 0, .8)
                )
            }

            .animate-card {
                transform: translateY(100px);
                opacity: 0;
                transition: all 0.6s ease-in-out;
            }

            .animate-card.show{
                transform: translateY(0);
                opacity: 1;
            }

        </style>

</head>
<body style="background-color: #ffffff">
        <nav class="navbar navbar" style="background-color: #ffffff; height:60px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/logo_bancapp_ultimo.png') }}" class="me-2 ms-2" height="48" alt="MDB Logo" loading="lazy"/>
                    <small>Bancapp</small>
                </a>

                <div class="d-flex ms-auto align-items-center justify-content-center"> <!-- Alinea el botón y el menú en la misma línea -->
                    <ul class="navbar-nav d-flex flex-row me-1"> <!-- Cambia aquí para que estén en la misma línea -->
                        <li class="nav-item me-2">
                            <div class="d-flex align-items-center">
                                <span><a class="nav-link" href="{{route('inicio_persona')}}"><i class="fas fa-user me-2"></i>Persona</a></span>
                            </div>
                        </li>
                        <li class="nav-item me-3">
                            <div class="d-flex align-items-center">
                                <span><a class="nav-link" href="{{route('inicio_empresa')}}"><i class="fas fa-chart-line me-2"></i>Empresa</a></span>
                            </div>
                        </li>
                        <li class="nav-item me-3">
                            <div class="d-flex align-items-center">
                                <span><a class="nav-link" href="#"> <i class="fas fa-info-circle me-2"></i>Sobre Nosotros</a></span>
                            </div>
                        </li>
                    </ul>
                </div>

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
                        <a href="{{route('login')}}" style="color: rgb(252, 255, 255); text-decoration: none;">Iniciar sesión</a>
                    </li>
                    <li class="list-group-item" style="background-color: transparent; border: none;">
                        <a href="{{route('register')}}" style="color: rgb(252, 255, 255); text-decoration: none;">Registrarse</a>
                    </li>
                    <li class="list-group-item" style="background-color: transparent; border: none;">
                        <a href="{{ route('password.request') }}" style="color: rgb(255, 255, 255); text-decoration: none;">Recuperar contraseña</a>
                    </li>
                    <li class="list-group-item" style="background-color: transparent; border: none;">
                        <a href="#" style="color: rgb(255, 255, 255); text-decoration: none;">Ayuda</a>
                    </li>
                </ul>
            </div>
        </div>
                
            
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Disfruta de los beneficios de
                                Bancapp
                            </h1>
                            <p class="lead fw-normal text-white-50 mb-4">Estamos comprometidos con tu crecimiento financiero y queremos darte la mano para que cumplas tus metas!</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{route('login')}}">Iniciar Sesion</a>
                                <a class="btn btn-outline-light btn-lg px-5 " href="{{route('register')}}">Registrarme</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://st2.depositphotos.com/1017986/7551/i/450/depositphotos_75515295-stock-photo-happy-african-woman-with-laptop.jpg" alt="..." /></div>
                </div>
            </div>
        </header>

        
    
        <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5 mb-5 mx-auto" style="max-width: 80%;">
            <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                <div class="mb-4 mb-xl-0">
                    <div class="fs-3 fw-bold text-white">Deseas mas informacion, sobre nuestros productos.</div>
                    <div class="text-white-50">Suscríbase a nuestro boletin para recibir las últimas actualizaciones.</div>
                </div>
                <div class="ms-xl-4">
                    <div class="input-group mb-2">
                        <input class="form-control" type="text" placeholder="Correo electronico..." aria-label="Email address..." aria-describedby="button-newsletter" />
                        <button class="btn btn-outline-light" id="button-newsletter" type="button">Subscribirse</button>
                    </div>
                    <div class="small text-white-50">Nos preocupa la privacidad y nunca compartiremos sus datos.</div>
                </div>
            </div>
        </aside>
    

        
    <section>           <!-- Carousel wrapper -->
        <div id="carouselBasicExample" class="carousel slide carousel-fade mb-10" data-mdb-ride="carousel" data-mdb-carousel-init>
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button
                    type="button"
                    data-mdb-target="#carouselBasicExample"
                    data-mdb-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>
                <button
                    type="button"
                    data-mdb-target="#carouselBasicExample"
                    data-mdb-slide-to="1"
                    aria-label="Slide 2"
                ></button>
                <button
                    type="button"
                    data-mdb-target="#carouselBasicExample"
                    data-mdb-slide-to="2"
                    aria-label="Slide 3"
                ></button>
            </div>
  
             <!-- Inner -->
            <div class="carousel-inner mb-6" >
            <!-- Single item -->
                <div class="carousel-item active">
                    <img src="https://cdn.prod.website-files.com/5e38f1a8e654dab96f303972/63c84da22b7ea11f3a242b71_Desaf%C3%ADos-de-Servicio-al-Cliente-en-los-Bancos-Cover.png" class="d-block w-100" alt="Sunset Over the City"/>
                    <div class="carousel-caption d-none d-md-block" style="color: #000000">
                        <h5>Envia dinero facilmente</h5>
                        <p>Nunca habia existido una forma mas facil y segura de mover tu dinero.</p>
                    </div>
                </div>
  
                <!-- Single item -->
                <div class="carousel-item">
                    <img src="https://cdn.prod.website-files.com/5e38f1a8e654dab96f303972/6400fb7355eee58edfef568a_Portada%20-%20The%20trends%20that%20will%20mark%202023%20in%20conversational%20banking.png" class="d-block w-100" alt="Canyon at Nigh"/>
                    <div class="carousel-caption d-none d-md-block" style="color: #000000" >
                        <h5>Realiza tus Transaciones</h5>
                        <p>Ahora puedes, realizar tus pagos, ver tus facturas, solicitar creditos y mucho mas.</p>
                    </div>
                </div>
  
                <!-- Single item -->
                <div class="carousel-item">
                    <img src="https://cdn.prod.website-files.com/5e38f1a8e654dab96f303972/63fcc8e627876796aa3e9428_Portada%20(4).png  " class="d-block w-100" alt="Canyon at Nigh"/>
                    <div class="carousel-caption d-none d-md-block" style="color: #000000">
                        <h5>Solicita un prestamo</h5>
                        <p>Con Bancapp puedes tener un prestamo de libre inversion en menos de 24hr, contáctanos y un asesor te atendera.</p>
                    </div>
                </div>
            </div>
            <!-- Inner -->
  
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel wrapper -->
    </section>


    <div class="d-flex mb-10">
        <div class="card ms-5 me-4 animate-card" style="max-width: 540px;">
            <div class="row g-0 align-items-center">
                <div class="col-md-4">
                    <img src="https://www.cajasiete.com/sites/default/files/styles/imagen_caracteristicas_de_producto_400_480/public/2020-09/producto-tarjeta-plata_0.png?itok=NYlKEh11" 
                         class="img-fluid rounded-start ms-2" 
                         alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Tarjeta Plata</h5>
                        <p class="card-text">Disfruta de una tarjeta diseñada para quienes buscan simplicidad y beneficios esenciales:</p>
                        <ul>
                            <li>Sin cuota de manejo el primer año.</li>
                            <li>Compras protegidas hasta $5,000 USD.</li>
                            <li>Acceso a promociones exclusivas en comercios aliados.</li>
                        </ul>
                        <p class="card-text">Con la tarjeta plata Tu primera puerta al mundo financiero</p>
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="">Conocer más</a>
                    </div>
                </div> 
            </div>
        </div>
        

        <div class="card ms-5 me-4 animate-card" style="max-width: 540px;">
            <div class="row g-0 align-items-center">
                <div class="col-md-4 ">
                    <img src="https://static.vecteezy.com/system/resources/previews/019/985/476/non_2x/gold-metal-credit-card-money-icon-online-payment-credit-card-3d-with-payment-protection-concept-business-finance-online-banking-and-online-shopping-free-png.png" 
                         class="img-fluid rounded-start ms-2" 
                         alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Tarjeta GOLD</h5>
                        <p class="card-text">Da el siguiente paso con una tarjeta que combina estilo y privilegios:</p>
                        <ul>
                            <li>Acumulación de hasta 2% en cashback.</li>
                            <li>Seguro de viajes internacional incluido.</li>
                            <li>Acceso a salas VIP en aeropuertos seleccionados.</li>
                        </ul>
                        <p class="card-text">Con la Tarjeta Gold, tus experiencias no tienen precio.</p>
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="">Conocer más</a>
                    </div>
                </div>                
            </div>
        </div>
    </div>


    <div class="d-flex mb-10">
        <div class="card ms-5 me-4 animate-card" style="max-width: 540px;">
            <div class="row g-0 align-items-center">
                <div class="col-md-4">
                    <img src="https://png.pngtree.com/png-clipart/20230825/original/pngtree-mobile-banking-app-user-interface-withdraw-picture-image_8687166.png" 
                         class="img-fluid rounded-start ms-2" 
                         alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">App de Control Financiero</h5>
                        <p class="card-text">Lleva el control de tus finanzas al alcance de tu mano:</p>
                        <ul>
                            <li>Seguimiento en tiempo real de tus gastos e ingresos.</li>
                            <li>Alertas personalizadas para tus metas de ahorro.</li>
                            <li>Visualización clara de tu historial de transacciones.</li>
                        </ul>
                        <p class="card-text">Optimiza tu dinero y toma el control de tu futuro financiero.</p>
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="">Descargar ahora</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card ms-5 me-4 animate-card" style="max-width: 540px;">
            <div class="row g-0 align-items-center">
                <div class="col-md-4">
                    <img src="https://static.vecteezy.com/system/resources/previews/017/349/943/non_2x/24-hour-service-icon-headphone-talk-support-over-the-phone-to-consult-customer-problems-png.png" 
                         class="img-fluid rounded-start ms-2" 
                         alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Asistencia 24/7</h5>
                        <p class="card-text">Siempre estamos contigo, sin importar la hora o el lugar:</p>
                        <ul>
                            <li>Atención personalizada en cualquier momento del día.</li>
                            <li>Soporte para bloqueos, consultas y reclamos urgentes.</li>
                            <li>Acceso a servicios de emergencia en viajes y hogar.</li>
                        </ul>
                        <p class="card-text">Nuestra prioridad es que siempre estés respaldado.</p>
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="">Conocer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block" style="color:rgb(22, 24, 26)">
                <span>Conéctese con nosotros en las redes sociales:</span>
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
        <section class="">
            <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
                <div class="row mt-3">
                <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="color: rgb(17, 17, 18)">
                    <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Bancapp
                        </h6>
                        <p>
                           Entidad bancaria, encargada de gestionar tus cuentas y facilitar tu vida financiera.
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
                            <a href="#!" class="text-reset">Creditos</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Cuentas personales y empresariales</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Reportes financieros</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Retiros</a>
                        </p>
                    </div>
                        <!-- Grid column -->
                
                        <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="color: rgb(23, 25, 27)">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                        Enlaces
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Retiros</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Creditos</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Extractos</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Ayuda</a>
                        </p>
                        </div>
                        <!-- Grid column -->
                
                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="color: rgb(12, 13, 14)">
                        <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contactos</h6>
                            <p><i class="fas fa-home me-3"></i> Santander de Quilichao, Cauca</p>
                            <p>
                            <i class="fas fa-envelope me-3"></i>
                            finance@bancapp.com
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
    <!-- Footer -->

        
        
                
                


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


        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const cards = document.querySelectorAll(".animate-card");
                let lastScrollTop = 0; // Para rastrear la dirección del scroll

                const handleScroll = () => {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                    cards.forEach(card => {
                        const cardTop = card.getBoundingClientRect().top;
                        const windowHeight = window.innerHeight;

                        if (cardTop < windowHeight && cardTop > 0) {
                            // Detecta dirección del scroll
                            if (scrollTop > lastScrollTop) {
                                // Scroll hacia abajo
                                card.style.transform = "translateY(0)";
                                card.style.opacity = "1";
                            } else {
                                // Scroll hacia arriba
                                card.style.transform = "translateY(-100px)";
                                card.style.opacity = "1";
                            }
                        } else {
                            // Resetea las tarjetas si no están en el viewport
                            card.style.transform = "translateY(100px)";
                            card.style.opacity = "0";
                        }
                    });

                    // Actualiza la última posición del scroll
                    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
                };

                // Escucha el evento de scroll
                window.addEventListener("scroll", handleScroll);
                handleScroll(); // Inicializa para ajustar elementos ya visibles
            });

        </script>
        
</body>
</html>
    