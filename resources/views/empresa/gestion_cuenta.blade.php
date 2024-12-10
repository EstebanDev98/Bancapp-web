@extends('layouts.empresa')

@section('content')
<main class="col-md-10 dashboard-container">
    <div class="container my-5">

        <!-- Título -->
        <h2 class="text-center mb-4">Gestión de Cuentas</h2>
    
        <!-- Tarjeta Editar -->
        <div id="editar" class="list-card mb-4" style="display: none;">
          <h4 class="mb-3">Editar Cuenta</h4>
          <form>
            <!-- Tipo de Cuenta -->
            <div class="mb-3">
              <label for="tipoCuenta" class="form-label">Tipo de Cuenta</label>
              <select id="tipoCuenta" class="form-select">
                <option selected>Seleccione un tipo...</option>
                <option value="ahorros">Cuenta de Ahorro</option>
                <option value="corriente">Cuenta Corriente</option>
              </select>
            </div>
    
            <!-- Nombre de la Cuenta -->
            <div class="mb-3">
              <label for="nombreCuenta" class="form-label">Nombre de la Cuenta</label>
              <input type="text" id="nombreCuenta" class="form-control" placeholder="Ingrese el nuevo nombre">
            </div>
    
            <!-- Botón Confirmar -->
            <button type="button" class="btn btn-confirm btn-neumorphic float-end" data-bs-toggle="modal"
              data-bs-target="#modalConfirmar">Confirmar</button>
          </form>
        </div>
    
        <!-- Tarjeta Eliminar -->
        <div id="eliminar" class="list-card mb-4" style="display: none;">
          <h4 class="mb-3">Eliminar Cuenta</h4>
          <ul class="list-group">
            <!-- Cuentas -->
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span>Cuenta Activa - ID: 00123</span>
              <input type="checkbox">
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span>Cuenta Inactiva - ID: 00456</span>
              <input type="checkbox">
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span>Cuenta en Espera - ID: 00789</span>
              <input type="checkbox">
            </li>
          </ul>
          <!-- Botón Eliminar -->
          <button type="button" class="btn btn-danger btn-neumorphic mt-3 float-end" data-bs-toggle="modal"
            data-bs-target="#modalEliminar">Eliminar</button>
        </div>
    
      </div>
    
      <!-- Modal Confirmar (Edición) -->
      <div class="modal fade" id="modalConfirmar" tabindex="-1" aria-labelledby="modalConfirmarLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalConfirmarLabel">Confirmación</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Los datos de la cuenta han sido actualizados correctamente.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
            </div>
          </div>
        </div>
      </div>
    
      <!-- Modal Eliminar -->
      <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalEliminarLabel">Confirmar Eliminación</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ¿Está seguro de eliminar esta cuenta?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-danger" onclick="eliminarCuenta()">Aceptar</button>
            </div>
          </div>
        </div>
      </div>
    
      <script>
        // Simulación de la eliminación de una cuenta
        function eliminarCuenta() {
          // Aquí puedes añadir la lógica para eliminar cuentas seleccionadas
          alert('Cuenta eliminada con éxito.');
          location.reload(); // Actualizar la interfaz después de eliminar
        }
    
        // Simular mostrar la vista según la acción
        function mostrarVista(accion) {
          document.getElementById('editar').style.display = accion === 'editar' ? 'block' : 'none';
          document.getElementById('eliminar').style.display = accion === 'eliminar' ? 'block' : 'none';
        }
    
        // Ejemplo: Inicializa con "Editar"
        mostrarVista('eliminar');
      </script>
</main>
@endsection