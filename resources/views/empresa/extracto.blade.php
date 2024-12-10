@extends('layouts.empresa')

@section('content')
<main class="col-md-10 dashboard-container">
    <div class="container mt-4">
        <!-- Título -->
       
      
        <!-- Mensaje -->
        <p class="text-center text-dark w-100">Seleccione el rango de fechas para ver y descargar sus extractos.</p>
      
        <!-- Carta principal -->
        <div class="card p-4 shadow-sm">
          <h5 class="text-primary mb-3">Lista de Extractos</h5>
          <table class="table table-striped table-hover">
            <thead class="table-primary">
              <tr>
                <th>ID</th>
                <th>Tipo de Cuenta</th>
                <th>Número de Cuenta</th>
                <th>Fecha Inicial</th>
                <th>Fecha Final</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody>
              <!-- Fila de ejemplo -->
              <tr>
                <td>1</td>
                <td>Ahorros</td>
                <td>123456789</td>
                <td>
                  <input type="date" class="form-control" placeholder="Fecha Inicial">
                </td>
                <td>
                  <input type="date" class="form-control" placeholder="Fecha Final">
                </td>
                <td>
                  <button class="btn btn-primary btn-rounded">
                    <i class="bi bi-download"></i> Descargar
                  </button>
                </td>
              </tr>
              <!-- Más filas dinámicas pueden agregarse aquí -->
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
</main>
@endsection