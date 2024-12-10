@extends('layouts.admin')

@section('content')
<main class="col-md-10 dashboard-container">
    <div class="container my-5">
        <h1 class="text-center">Productos Bancarios</h1>
        <div class="row">
            <!-- Cartas de productos -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://constructor.lacuarta.com/wp-content/uploads/2023/06/Jovenes-inversion.jpg" class="card-img-top" alt="Préstamos Comerciales">
                    <div class="card-body">
                        <h5 class="card-title">Préstamos Comerciales</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://caracoltv.brightspotcdn.com/dims4/default/2b2ea12/2147483647/strip/true/crop/1280x720+0+0/resize/800x450!/quality/75/?url=http%3A%2F%2Fcaracol-brightspot.s3.us-west-2.amazonaws.com%2Ffb%2F04%2F408e004e4621a4534163781ea1d2%2Fdiseno-cms.png" class="card-img-top" alt="Cuenta Corriente">
                    <div class="card-body">
                        <h5 class="card-title">Cuenta Corriente</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://imagenes.eleconomista.com.mx/files/image_768_768/uploads/2023/12/25/66e4ce543b41a.jpeg" class="card-img-top" alt="Cuenta de Ahorros">
                    <div class="card-body">
                        <h5 class="card-title">Cuenta de Ahorros</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Botones de acción -->
        <div class="text-center my-4">
            <button class="btn btn-primary" onclick="mostrarToast('añadir')">Añadir Nuevo Producto</button>
            <button class="btn btn-danger" onclick="mostrarToast('eliminar')">Eliminar Producto</button>
        </div>
    </div>

    <!-- Toast de mensajes -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="toastMessage" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    ¡Producto añadido exitosamente!
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function mostrarToast(accion) {
            const toastElement = document.getElementById('toastMessage');
            const toastBody = toastElement.querySelector('.toast-body');

            if (accion === 'añadir') {
                toastBody.textContent = '¡Producto añadido exitosamente!';
                toastElement.classList.replace('text-bg-danger', 'text-bg-success');
            } else if (accion === 'eliminar') {
                toastBody.textContent = '¿Seguro que quieres eliminar este producto?';
                toastElement.classList.replace('text-bg-success', 'text-bg-danger');
            }

            const toast = new bootstrap.Toast(toastElement);
            toast.show();
        }
    </script>
</main>
@endsection