@extends('layouts.persona')

@section('content')
<main class="col-md-10 dashboard-container">
    <div class="row">
        <!-- Tarjetas del dashboard -->
        <div class="col-md-4 mb-3 ms-5">
            <div class="card p-3">
                <ol class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between align-items-start" style="border-color: #4d9ff6">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">Cuenta</div>
                        ........
                      </div>
                      <span class="badge text-bg-primary rounded-pill">Detalles  <i class="bi bi-pencil-square"></i></span>
                    </li>
                </ol>

                <ol class="list-group mb-3" >
                    <li class="list-group-item d-flex justify-content-between align-items-start" style="border-color: #4d9ff6">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Estado</div>
                          ........
                        </div>
                        <span class="badge text-bg-primary rounded-pill">Ver más <i class="bi bi-chevron-down"></i>
                        </span>
                    </li>
                </ol>

                <ol class="list-group mb-3" >
                    <li class="list-group-item d-flex justify-content-between align-items-start" style="border-color: #4d9ff6">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Numero de cuenta</div>
                          ***********
                        </div>
                        <span class="badge text-bg-primary rounded-pill">Eliminar <i class="bi bi-trash3"></i>
                        </span>
                    </li>
                </ol>

                <ol class="list-group mb-3" >
                    <li class="list-group-item d-flex justify-content-between align-items-start" style="border-color: #4d9ff6">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Saldo de cuenta</div>
                          $2.000.000
                        </div>
                        <span class="badge text-bg-primary rounded-pill">Saldo <i class="bi bi-currency-dollar"></i>
                        </span>
                    </li>
                </ol>

                <button class="btn btn-outline-primary">
                    <p>Consultar saldo</p>
                </button>
            </div>
        </div>


        <div class="col-md-4 mb-3 ms-5">
            <div class="card p-3">
                <ol class="list-group mb-3" >
                    <li class="list-group-item d-flex justify-content-between align-items-start" style="border-color: #4d9ff6">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Seleccionar cuenta</div>
                          ........
                        </div>
                        <span class="badge text-bg-primary rounded-pill"><i class="bi bi-chevron-down"></i>
                        </span>
                    </li>
                </ol>

                <ol class="list-group mb-3" >
                    <li class="list-group-item d-flex justify-content-between align-items-start" style="border-color: #4d9ff6">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Nombre de usuario</div>
                          ...........
                        </div>
                        <span class="badge text-bg-primary rounded-pill"><i class="bi bi-person-fill"></i>
                        </span>
                    </li>
                </ol>

                <ol class="list-group mb-3" >
                    <li class="list-group-item d-flex justify-content-between align-items-start" style="border-color: #4d9ff6">
                        <div class="ms-2 me-auto">
                          <div class="fw-bold">Contraseña</div>
                          *********
                        </div>
                        <span class="badge text-bg-primary rounded-pill"><i class="bi bi-eye-slash"></i>
                        </span>
                    </li>
                </ol>

                <button class="btn btn-outline-primary">
                    <p>Crear cuenta</p>
                </button>
            </div>
        </div>
    </div>

    <!-- Tabla de extractos -->
    <div class="table-container mt-4">
        <h5>Extractos</h5>
        <table class="table text-white">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Documento</th>
                    <th>Monto</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Certificado Bancario</td>
                    <td>$0</td>
                    <td>16-sep-2024</td>
                    <td><button class="btn btn-outline-primary">Imprimir</button></td>
                </tr>
                <!-- Más filas aquí -->
            </tbody>
        </table>
        <button class="btn btn-outline-light">Ver más</button>
    </div>
</main>
@endsection
        
        
    
