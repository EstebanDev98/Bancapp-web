@extends('layouts.persona')

@section('content')
<main class="col-md-10 dashboard-container">
    <div class="container mt-4">
        <div class="row">
            <!-- Tarjeta de detalles del crédito -->
            <div class="col-md-4">
                <div class="card card-custom p-3">
                    <img src="https://static.vecteezy.com/system/resources/previews/024/189/093/non_2x/house-real-estate-building-in-png.png" alt="Hipoteca" class="img-fluid mx-auto d-block" style="max-width: 150px;">
                    <h5 class="text-center mt-2">Hipoteca</h5>
                    <p class="text-center"><strong>$30.000.000</strong><br>Total de la deuda.</p>
                    <p>Valor del próximo pago: <strong>$400.000</strong></p>
                    <p>Fecha del próximo pago: <strong>29 sep 2024</strong></p>
                    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#payModal">Pagar</button>
                </div>
            </div>
    
            <!-- Tarjeta de historial de pagos -->
            <div class="col-md-4">
                <div class="card card-custom p-3">
                    <h5>Historial de pagos</h5>
                    <p>Puedes consultar tus pagos</p>
                    <button class="btn btn-primary w-100" onclick="showPaymentHistory()">Consultar</button>
                    <!-- Historial generado dinámicamente -->
                    <div id="paymentHistory" class="mt-3"></div>
                </div>
            </div>
    
            <!-- Tarjeta de días restantes -->
            <div class="col-md-4">
                <div class="card card-custom p-3 text-center">
                    <h5><i class="bi bi-clock"></i> 4</h5>
                    <p>Días restantes para el próximo pago</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal para pagar -->
    <div class="modal fade" id="payModal" tabindex="-1" aria-labelledby="payModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="payModalLabel">Selecciona un medio de pago</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <div class="d-flex justify-content-around">
                        <div class="payment-icon mb-3" title="Visa">
                            <img src="https://static.vecteezy.com/system/resources/thumbnails/020/975/570/small_2x/visa-logo-visa-icon-transparent-free-png.png" alt="Visa">
                        </div>
                        <div class="payment-icon" title="MasterCard">
                            <img src="https://cdn.freebiesupply.com/logos/thumbs/2x/mastercard-4-logo.png" alt="MasterCard">
                        </div>
                        <div class="payment-icon" title="PSE">
                            <img src="https://inmobiliarialamansion.com/wp-content/uploads/2019/01/logo-pse.png" alt="PSE">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal para detalles de un pago -->
    <div class="modal fade" id="paymentDetailModal" tabindex="-1" aria-labelledby="paymentDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentDetailModalLabel">Detalles del pago</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Estado:</strong> Aprobado</p>
                    <p><strong>Valor:</strong> $400.000</p>
                    <p><strong>Medio de pago:</strong> Banco</p>
                    <p><strong>Fecha de pago:</strong> 28 agosto 2024</p>
                    <p><strong>Hora:</strong> 14:09</p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showPaymentHistory() {
            const history = `
                <div class="detail-card">
                    <div class="btn-view-more">
                        <span>Agosto 2024: <strong>$400.000</strong></span>
                        <button class="btn btn-link text-primary" data-bs-toggle="modal" data-bs-target="#paymentDetailModal">
                            <i class="bi bi-plus-circle"></i>
                        </button>
                    </div>
                </div>
            `;
            document.getElementById("paymentHistory").innerHTML = history;
        }
    </script>
</main>
@endsection