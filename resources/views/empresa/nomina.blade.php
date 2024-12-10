@extends('layouts.empresa')

@section('content')
<main class="col-md-10 dashboard-container">
    <div class="container my-5">

        <!-- Título -->
        <h2 class="text-center mb-4">Pago de Nómina</h2>
    
        <!-- Barra de búsqueda -->
        <div class="d-flex align-items-center mb-4">
          <div class="input-group">
            <input type="text" id="buscar" class="form-control" placeholder="Buscar por área (Ej: Contabilidad)">
            <button class="btn btn-primary" id="btnBuscar">
              <i class="bi bi-search"></i> Buscar empleados
            </button>
          </div>
        </div>
    
        <!-- Tarjeta de Lista de Empleados -->
        <div id="tablaEmpleados" class="list-card ">
          <h4 class="mb-3">Empleados</h4>
          <table class="table table-striped mb-3">
            <thead class="table-primary">
              <tr>
                <th scope="col"><input type="checkbox" id="seleccionarTodos"></th>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Número de Cuenta</th>
                <th scope="col">Cargo</th>
                <th scope="col">Salario</th>
              </tr>
            </thead>
            <tbody id="listaEmpleados">
              <!-- Fila de ejemplo -->
              <tr>
                <td><input type="checkbox"></td>
                <td>00123</td>
                <td>Juan Pérez</td>
                <td>1234-5678-90</td>
                <td>Contador</td>
                <td>$1,200.00</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>00456</td>
                <td>María López</td>
                <td>9876-5432-10</td>
                <td>Analista</td>
                <td>$1,400.00</td>
              </tr>
              <tr>
                <td><input type="checkbox"></td>
                <td>00789</td>
                <td>Carlos Gómez</td>
                <td>4567-8901-23</td>
                <td>Técnico</td>
                <td>$1,100.00</td>
              </tr>
            </tbody>
          </table>
    
          <!-- Paginación -->
          <nav aria-label="Paginación de empleados" class="d-flex justify-content-end mb-2">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
            </ul>
          </nav>
    
          <!-- Botón Pagar -->
          <button class="btn btn-primary btn-neumorphic mt-3 float-end" onclick="confirmarPago()">
            <i class="bi bi-currency-dollar"></i> Pagar
          </button>
        </div>
      </div>
    
      <!-- Modal Confirmación de Pago -->
      <div class="modal fade" id="modalPago" tabindex="-1" aria-labelledby="modalPagoLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalPagoLabel">Confirmación de Pago</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              ¿Está seguro de realizar el pago a los empleados seleccionados?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-success" onclick="realizarPago()">Aceptar</button>
            </div>
          </div>
        </div>
      </div>
    
      <script>
        // Simulación de funcionalidad de buscar
        document.getElementById('btnBuscar').addEventListener('click', function () {
          const area = document.getElementById('buscar').value.trim();
          if (area) {
            alert(`Mostrando empleados del área: ${area}`);
            // Aquí puedes añadir lógica para cargar empleados del backend según el área
          } else {
            alert('Por favor, ingrese un área para buscar.');
          }
        });
    
        // Selección de todos los empleados
        document.getElementById('seleccionarTodos').addEventListener('change', function (e) {
          const checkboxes = document.querySelectorAll('#listaEmpleados input[type="checkbox"]');
          checkboxes.forEach(checkbox => {
            checkbox.checked = e.target.checked;
          });
        });
    
        // Confirmación de pago
        function confirmarPago() {
          const seleccionados = Array.from(document.querySelectorAll('#listaEmpleados input[type="checkbox"]:checked'));
          if (seleccionados.length > 0) {
            const modal = new bootstrap.Modal(document.getElementById('modalPago'));
            modal.show();
          } else {
            alert('Debe seleccionar al menos un empleado para realizar el pago.');
          }
        }
    
        // Realizar pago (simulación)
        function realizarPago() {
          alert('Pago realizado con éxito.');
          location.reload(); // Actualiza la página después de realizar el pago
        }
      </script>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</main>
@endsection