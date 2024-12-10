@extends('layouts.persona')

@section('content')
<main class="col-md-10 dashboard-container">
    <div class="container mt-5">
        <div class="row">
            <!-- Tarjeta de créditos activos -->
            <div class="col-md-8">
                <div class="credits-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="credits-header">Créditos activos</h5>
                        <i class="bi bi-info-circle credits-info-icon"></i>
                    </div>
                    <p>Actualmente tienes algunos créditos con nosotros, te invitamos a que revises tus obligaciones. ¡Estamos para ayudarte!</p>
                    
                    <!-- Sección de créditos -->
                    <div class="credits-box">
                        <h6>Mis créditos</h6>
                        
                        <div class="credits-item">
                            <span><i class="bi bi-house-door-fill"> </i> Hipoteca </span>
                            <input type="checkbox" id="credit1" class="form-check-input">
                        </div>
                        
                        <div class="credits-item">
                            <span><i class="bi bi-truck"> </i> Automovil </span>
                            <input type="checkbox" id="credit2" class="form-check-input">
                        </div>
                        
                        <div class="credits-item">
                            <span><i class="bi bi-book"> </i> Universidad </span>
                            <input type="checkbox" id="credit3" class="form-check-input">
                        </div>
                        
                        <!-- Botón Consultar crédito -->
                        <button id="consultButton" class="consult-button mt-3" onclick="consultarCredito()">
                            Consultar crédito
                        </button>
                    </div>
                </div>
            </div>
    
            <!-- Sección derecha con otros elementos -->
            <div class="col-md-4">
                <div class="card p-3 mb-3 text-center">
                    <div class="d-flex align-items-center">
                        <div class="stars me-2">
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="ms-auto">
                            <i class="bi bi-cart fs-4"></i>
                        </div>
                    </div>
                    <div class="text-center mt-2">
                        <h4 class="mb-1">
                            <img src="https://cdn.worldvectorlogo.com/logos/trivago.svg" alt="Trivago" width="100">
                        </h4>
                        <a href="https://www.trivago.com/en-US?themeId=280&sem_keyword=trivago&sem_creativeid=717218479667&sem_matchtype=e&sem_network=g&sem_device=c&sem_placement=&sem_target=&sem_adposition=&sem_param1=&sem_param2=&sem_campaignid=398320803&sem_adgroupid=121773974075&sem_targetid=kwd-5593367084&sem_location=1029410&cipc=br&cip=9981900005&gad_source=1&gclid=CjwKCAiA0rW6BhAcEiwAQH28InFl-29QpApShpEClXkZBKE51Uh-jBauuJ9aRo4Cfmm9jrSiRY8U3RoC_cgQAvD_BwE" class="text-primary">Nuevas ofertas</a>
                    </div>
                    <div class="text-center mt-2">
                        <p class="mb-1">Viaja a New York</p>
                        <p class="text-secondary">Vence 09/10/2024</p>
                        <i class="bi bi-airplane fs-4"></i>
                    </div>
                </div>
                
                <div class="card p-3">
                    <div class="text-center">
                        <h5 class="card-title">Nuevo</h5>
                        <h2 class="fw-bold">
                            $<span class="highlight">50</span>/mo
                        </h2>
                        <i class="bi bi-stars fs-4 text-warning"></i>
                    </div>
                    <ul>
                        <li>Cursos</li>
                        <li>Alojamiento</li>
                        <li>Servicios a domicilio</li>
                        <li>Librerías</li>
                        <li>Recreación</li>
                    </ul>
                    <a href="{{route('credito_solicitud_persona')}}" class="btn btn-primary w-100">Solicitar credito</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Función para redirigir al usuario a otra vista al hacer clic en "Consultar crédito"
        function consultarCredito() {
            const credit1 = document.getElementById('credit1').checked;
            const credit2 = document.getElementById('credit2').checked;
            const credit3 = document.getElementById('credit3').checked;
    
            if (credit1 || credit2 || credit3) {
                // Redirigir a la página de consulta de crédito
                window.location.href = "/credito/detalles/persona"; // Cambia esta URL según tu proyecto
            } else {
                alert("Por favor, selecciona al menos un crédito para consultar.");
            }
        }
    </script>
</main>
@endsection