@extends('layouts.persona')

@section('content')
<main class="col-md-10 dashboard-container">
  <div class="container mt-4">
    <!-- Título -->
    
  
    <!-- Carta principal -->
    <div class="row mb-4">
      <div class="col-md-6">
        <div class="card p-4 shadow-sm">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="text-primary">Transferir a Cuenta</h5>
            <button class="btn btn-primary btn-rounded" id="toggleTransferOptions">
              <i class="bi bi-arrow-down-circle"></i>
            </button>
          </div>
  
          <div id="transferOptions" class="mt-3 d-none">
            <button class="btn btn-outline-primary w-100 mb-2" id="personalAccount">Cuenta Personal</button>
            <button class="btn btn-outline-primary w-100" id="otherAccount">Otra Cuenta</button>
          </div>
        </div>
      </div>
  
      <!-- Carta para datos de cuenta personal -->
      <div class="col-md-6">
        <div id="personalAccountCard" class="card p-4 shadow-sm d-none">
          <h5 class="text-primary">Datos de Cuenta Personal</h5>
          <form>
            <div class="mb-3">
              <label for="personalAccountNumber" class="form-label">Número de Cuenta</label>
              <input type="text" id="personalAccountNumber" class="form-control" placeholder="Ingrese el número de cuenta">
            </div>
            <div class="mb-3">
              <label for="personalAmount" class="form-label">Monto</label>
              <input type="number" id="personalAmount" class="form-control" placeholder="Ingrese el monto">
            </div>
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#confirmModal">
              Realizar Transacción
            </button>
          </form>
        </div>
      </div>
  
      <!-- Carta para datos de otra cuenta -->
      <div class="col-md-6">
        <div id="otherAccountCard" class="card p-4 shadow-sm d-none">
          <h5 class="text-primary">Datos de Otra Cuenta</h5>
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input type="text" id="name" class="form-control" placeholder="Ingrese el nombre">
            </div>
            <div class="mb-3">
              <label for="surname" class="form-label">Apellido</label>
              <input type="text" id="surname" class="form-control" placeholder="Ingrese el apellido">
            </div>
            <div class="mb-3">
              <label for="idNumber" class="form-label">Número de Identificación</label>
              <input type="text" id="idNumber" class="form-control" placeholder="Ingrese la identificación">
            </div>
            <div class="mb-3">
              <label for="accountNumber" class="form-label">Número de Cuenta</label>
              <input type="text" id="accountNumber" class="form-control" placeholder="Ingrese el número de cuenta">
            </div>
            <div class="mb-3">
              <label for="bank" class="form-label">Banco</label>
              <input type="text" id="bank" class="form-control" placeholder="Ingrese el banco">
            </div>
            <div class="mb-3">
              <label for="amount" class="form-label">Monto</label>
              <input type="number" id="amount" class="form-control" placeholder="Ingrese el monto">
            </div>
            <div class="mb-3">
              <label for="comment" class="form-label">Comentario</label>
              <textarea id="comment" class="form-control" rows="2" placeholder="Ingrese un comentario"></textarea>
            </div>
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#confirmModal">
              Realizar Transacción
            </button>
          </form>
        </div>
      </div>
    </div>
  
    <!-- Modal de Confirmación -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="confirmModalLabel">Confirmar Transacción</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ¿Está seguro de realizar esta transacción?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Confirmar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card p-4 shadow-sm mt-4">
    <h5 class="text-primary">Historial de Transacciones</h5>
    <table class="table table-striped table-hover mt-3">
      <thead class="table-primary">
        <tr>
          <th>ID</th>
          <th>Tipo de Cuenta</th>
          <th>Número de Cuenta</th>
          <th>Banco</th>
          <th>Monto</th>
          <th>Fecha</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>
        <!-- Ejemplo de fila -->
        <tr>
          <td>1</td>
          <td>Otra Cuenta</td>
          <td>123456789</td>
          <td>Banco XYZ</td>
          <td>$1,000</td>
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

  
  <script>
    // Mostrar/Ocultar opciones de transferencia
    document.getElementById('toggleTransferOptions').addEventListener('click', function () {
      const options = document.getElementById('transferOptions');
      options.classList.toggle('d-none');
    });
  
    // Mostrar/Ocultar cartas según la selección
    document.getElementById('personalAccount').addEventListener('click', function () {
      document.getElementById('personalAccountCard').classList.remove('d-none');
      document.getElementById('otherAccountCard').classList.add('d-none');
    });
  
    document.getElementById('otherAccount').addEventListener('click', function () {
      document.getElementById('otherAccountCard').classList.remove('d-none');
      document.getElementById('personalAccountCard').classList.add('d-none');
    });
  </script>
  
</main>
@endsection
        
        
    

