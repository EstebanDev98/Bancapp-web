@extends('layouts.empresa')

@section('content')
<main class="col-md-10 dashboard-container">
        <div class="container text-align-center me-1">
            <h1 class="text-center title">Gestion de cuentas</h1>
            <p class="text-center">En la siguiente sesion puedes encontrar tus cuentas, estados y administrarlas.</p>
        </div>
        <div class="container mt-4" style="max-width: 800px;">
            <ul class="list-group">
            <!-- Cuenta Activa -->
            <li class="list-group-item d-flex justify-content-between align-items-center border border-success">
                <div class="d-flex flex-column">
                <p class="fw-bold mb-1">Cuenta Ahorros</p>
                <p class="text-muted mb-0">ID: 00123</p>
                <p class="text-muted mb-0">Nº: 23456890123</p>
                </div>
                <div class="d-flex align-items-center">
                <span class="badge rounded-pill bg-success text-white me-3">Activa</span>
                <button class="btn btn-outline-primary btn-sm me-2" title="Editar">
                    <i class="bi bi-pencil-fill"></i>
                </button>
                <button class="btn btn-outline-danger btn-sm" title="Eliminar">
                    <i class="bi bi-trash-fill"></i>
                </button>
                </div>
            </li>
        
            <!-- Cuenta Inactiva -->
            <li class="list-group-item d-flex justify-content-between align-items-center border border-secondary">
                <div class="d-flex flex-column">
                <p class="fw-bold mb-1">Cuenta Corriente</p>
                <p class="text-muted mb-0">ID: 00456</p>
                <p class="text-muted mb-0">Nº: 16234589074</p>
                </div>
                <div class="d-flex align-items-center">
                <span class="badge rounded-pill bg-secondary text-white me-3">Inactiva</span>
                <button class="btn btn-outline-primary btn-sm me-2" title="Editar">
                    <i class="bi bi-pencil-fill"></i>
                </button>
                <button class="btn btn-outline-danger btn-sm" title="Eliminar">
                    <i class="bi bi-trash-fill"></i>
                </button>
                </div>
            </li>
        
            <!-- Cuenta en Espera -->
            <li class="list-group-item d-flex justify-content-between align-items-center border border-warning">
                <div class="d-flex flex-column">
                <p class="fw-bold mb-1">Cuenta Corriente</p>
                <p class="text-muted mb-0">ID: 00789</p>
                <p class="text-muted mb-0">Nº: 19845634095</p>
                </div>
                <div class="d-flex align-items-center">
                <span class="badge rounded-pill bg-warning text-dark me-3">En espera</span>
                <button class="btn btn-outline-primary btn-sm me-2" title="Editar">
                    <i class="bi bi-pencil-fill"></i>
                </button>
                <button class="btn btn-outline-danger btn-sm" title="Eliminar">
                    <i class="bi bi-trash-fill"></i>
                </button>
                </div>
            </li>
            </ul>
        </div>
      
    
</main>
@endsection