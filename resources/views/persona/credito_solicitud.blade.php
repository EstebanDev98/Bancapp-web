@extends('layouts.persona')

@section('content')
<main class="col-md-10 dashboard-container">
    <div class="container mt-4">
        <h2 class="text-center text-primary">SOLICITUD DE CRÉDITO</h2>
        <p class="text-center">¡Te acompañamos a cumplir tus metas!</p>
    
        <div class="row">
            <!-- Columna de créditos disponibles -->
            <div class="col-md-6">
                <div class="card card-selection p-3">
                    <h4 class="text-primary">Créditos Disponibles</h4>
                    <p>Selecciona tu preferencia</p>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <input type="radio" name="creditType" value="Vivienda" id="creditVivienda">
                            <label for="creditVivienda">
                                <i class="bi bi-house-door-fill"></i> Vivienda
                            </label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" name="creditType" value="Automóvil" id="creditAuto">
                            <label for="creditAuto">
                                <i class="bi bi-car-front-fill"></i> Automóvil
                            </label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" name="creditType" value="Estudio" id="creditEstudio">
                            <label for="creditEstudio">
                                <i class="bi bi-book-fill"></i> Estudio
                            </label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" name="creditType" value="Viaje" id="creditViaje">
                            <label for="creditViaje">
                                <i class="bi bi-airplane-fill"></i> Viaje
                            </label>
                        </li>
                    </ul>
                    <button class="btn btn-primary w-100 mt-3" id="btnSolicitar">Solicitar</button>
                </div>
            </div>
    
            <!-- Columna de formulario de crédito -->
            <div class="col-md-6" id="formContainer">
                <!-- El formulario se generará dinámicamente aquí -->
            </div>
        </div>
    </div>
    
    <!-- Modal de confirmación -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Solicitud Enviada</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Tu solicitud ha sido enviada con éxito.</p>
                    <p>Un agente del banco se comunicará contigo en un plazo de 5 a 7 días.</p>
                    <p>¡Gracias por confiar en nosotros!</p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('btnSolicitar').addEventListener('click', function() {
            // Obtener el crédito seleccionado
            const creditType = document.querySelector('input[name="creditType"]:checked');
            if (!creditType) {
                alert('Por favor, selecciona un tipo de crédito.');
                return;
            }
    
            // Generar formulario dinámicamente
            const formContainer = document.getElementById('formContainer');
            formContainer.innerHTML = `
            <div class="card card-form p-3">
                <h4 class="text-primary">Datos del crédito (${creditType.value})</h4>
                <form>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Monto</label>
                        <input type="number" class="form-control" id="amount" placeholder="$">
                    </div>
                    <div class="mb-3">
                        <label for="installments" class="form-label">Número de cuotas</label>
                        <select class="form-select" id="installments">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Escribe tu mensaje"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#confirmationModal">Enviar</button>
                </form>
            </div>
        `;
        });
    </script>
</main>
@endsection