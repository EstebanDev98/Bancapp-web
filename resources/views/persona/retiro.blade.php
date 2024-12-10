@extends('layouts.persona')

@section('content')
<main class="col-md-10 dashboard-container">
    <div class="container mt-5">
        <!-- Fila principal de tarjetas -->
        <div class="row mb-8">
            <!-- Primera tarjeta con el tipo de cuenta -->
            <div class="col-md-8 ">
                <div class="card p-3 mb-3 card-info">
                    <label for="accountType">Retirar de cuenta</label>
                    <select id="accountType" class="form-select">
                        <option selected disabled>Selecciona una cuenta...</option>
                        <option value="1">Débito</option>
                        <option value="2">Corriente</option>
                        <option value="3">Crédito</option>
                    </select>
                </div>
            </div>
        </div>
        
        
        <div class="card p-4 mb-3 card-retiro" style="background-color: #2e91fb">
            <form>
                <div class="mb-3">
                    <label for="accountNumber" class="form-label">Número de cuenta</label>
                    <input type="text" class="form-control" id="accountNumber" placeholder="************">
                </div>
                <div class="mb-3">
                    <label for="currentBalance" class="form-label">Estado actual</label>
                    <input type="text" class="form-control" id="currentBalance" placeholder="$0" disabled>
                </div>
                <div class="mb-3">
                    <label for="amount" class="form-label">Valor</label>
                    <input type="text" class="form-control" id="amount" placeholder="$0">
                </div>
                <button class="btn btn-outline-dark btn-rounded" data-bs-toggle="modal" data-bs-target="#codigoModal">
                    Solicitar código de retiro <i class="bi bi-arrow-right"></i>
                </button>
            </form>
        </div>
        
        
        <div class="modal fade" id="codigoModal" tabindex="-1" aria-labelledby="codigoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="codigoModalLabel">Código de retiro</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="code-display" id="codigoRetiro">234865</div>
                        <button id="toggleCode" class="btn btn-link">
                            <i class="bi bi-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="card p-4 shadow-sm mt-4">
            <h5 class="text-primary">Historial de Retiros</h5>
            <table class="table table-striped table-hover mt-3">
              <thead class="table-primary">
                <tr>
                  <th>ID</th>
                  <th>Tipo de Cuenta</th>
                  <th>Número de Cuenta</th>
                  <th>Modalidad</th>
                  <th>Monto</th>
                  <th>Fecha de retiro</th>
                  <th>Imprimir</th>
                </tr>
              </thead>
              <tbody>
                <!-- Ejemplo de fila -->
                <tr>
                  <td>1</td>
                  <td>Ahorro</td>
                  <td>123456789</td>
                  <td>Cajero</td>
                  <td>$100.000</td>
                  <td>2024-11-18</td>
                  <td>
                    <button class="btn btn-outline-primary btn-rounded">
                      <i class="bi bi-printer"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- Paginación -->
            <nav>
              <ul class="pagination justify-content-center mt-3">
                <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
              </ul>
            </nav>
          </div>
    </div>

    <script>
        document.getElementById('toggleCode').addEventListener('click', function () {
            const codeElement = document.getElementById('codigoRetiro');
            const eyeIcon = document.getElementById('eyeIcon');
            
            if (codeElement.classList.contains('hide-code')) {
                codeElement.classList.remove('hide-code');
                eyeIcon.classList.remove('bi-eye-slash');
                eyeIcon.classList.add('bi-eye');
            } else {
                codeElement.classList.add('hide-code');
                eyeIcon.classList.remove('bi-eye');
                eyeIcon.classList.add('bi-eye-slash');
            }
        });
    </script>
</main>
@endsection