@extends('layouts.admin')

@section('content')
<main class="col-md-10 dashboard-container">
    <div class="container my-4">
        <div class="header-title text-center mb-4">GESTIÓN DE USUARIOS</div>
        <div class="container-custom">
            <!-- Navegación de pestañas -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" id="edit-tab" href="#edit" data-bs-toggle="tab">Editar Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="create-tab" href="#create" data-bs-toggle="tab">Crear Usuario</a>
                </li>
            </ul>

            <!-- Contenido de las pestañas -->
            <div class="tab-content mt-4">
                <!-- Pestaña Editar Usuario -->
                <div class="tab-pane fade show active" id="edit">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-3 text-center">
                                <div class="profile-image">
                                    <img src="https://e7.pngegg.com/pngimages/188/424/png-clipart-software-developer-computer-servers-programmer-web-developer-computer-software-others-miscellaneous-face-thumbnail.png" alt="Avatar">
                                    <span class="edit-icon"><i class="bi bi-pencil"></i></span>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="name" value="Juan Perez">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="username" class="form-label">Usuario</label>
                                        <input type="text" class="form-control" id="username" value="Juan Perez">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" value="juan.perez@gmail.com">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="password" value="********">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="birthdate" class="form-label">Fecha de Nacimiento</label>
                                        <input type="text" class="form-control" id="birthdate" value="25 Enero 1990">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="address" class="form-label">Dirección Permanente</label>
                                        <input type="text" class="form-control" id="address" value="Cali, Valle del Cauca, Colombia">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="city" class="form-label">Ciudad</label>
                                        <input type="text" class="form-control" id="city" value="Cali">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="postal" class="form-label">Código Postal</label>
                                        <input type="text" class="form-control" id="postal" value="45962">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="country" class="form-label">País</label>
                                        <input type="text" class="form-control" id="country" value="Colombia">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-custom">Guardar</button>
                        </div>
                    </form>
                </div>

                <!-- Pestaña Crear Usuario -->
                <div class="tab-pane fade" id="create">
        
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-3 text-center">
                                    <div class="profile-image">
                                        <img src="https://e7.pngegg.com/pngimages/188/424/png-clipart-software-developer-computer-servers-programmer-web-developer-computer-software-others-miscellaneous-face-thumbnail.png" alt="Avatar" class="rounded-circle">
                                        <div>
                                            <a href="#" class="text-primary text-decoration-none">Upload Photo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="name" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="name" placeholder="Ingresa el nombre">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="username" class="form-label">Usuario</label>
                                            <input type="text" class="form-control" id="username" placeholder="Ingresa el usuario">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="ejemplo@correo.com">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="password" class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" id="password" placeholder="Ingresa una contraseña">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="birthdate" class="form-label">Fecha de Nacimiento</label>
                                            <input type="date" class="form-control" id="birthdate">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="address" class="form-label">Dirección</label>
                                            <input type="text" class="form-control" id="address" placeholder="Ingresa la dirección">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="permanent-address" class="form-label">Dirección Permanente</label>
                                            <input type="text" class="form-control" id="permanent-address" placeholder="Dirección permanente">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="city" class="form-label">Ciudad</label>
                                            <input type="text" class="form-control" id="city" placeholder="Ingresa la ciudad">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="postal-code" class="form-label">Código Postal</label>
                                            <input type="text" class="form-control" id="postal-code" placeholder="Ingresa el código postal">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="country" class="form-label">País</label>
                                            <input type="text" class="form-control" id="country" placeholder="Ingresa el país">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Crear</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection