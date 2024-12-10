@extends('layouts.admin')

@section('content')
<main class="col-md-10 dashboard-container">
    <div class="container my-4">
        <div class="header-title">GESTIÓN DE USUARIOS</div>
        <div class="container-custom">
            <div class="d-flex justify-content-between mb-3">
                <input type="text" class="form-control w-25" placeholder="Buscar...">
                <a href="{{route('editar_admin')}}" class="btn btn-custom"><i class="bi bi-plus-lg"></i> Añadir Usuario</a>
            </div>
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Producto</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Juan Perez</td>
                        <td>juan.perez@gmail.com</td>
                        <td>jP35478zwq</td>
                        <td>CUENTA DE AHORROS</td>
                        <td>
                            <button class="btn btn-sm btn-primary me-1">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Más filas según datos -->
                </tbody>
            </table>
            <div class="d-flex justify-content-between align-items-center">
                <div>1-10 of 97</div>
                <nav>
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</main>

@endsection