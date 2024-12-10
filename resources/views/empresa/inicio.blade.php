@extends('layouts.empresa_inicio')

@section('content')
<main class="dashboard-container">
    <div class="main-content">
        <div class="container text-align-center me-1 ">
            <h1 class="text-center title">Bienvenido al Panel de Empresa</h1>
            <p class="text-center">Selecciona una opción para gestionar tus acciones</p>

            <div class="d-flex justify-content-center align-items-center vh-100">
                <div class="card-container text-center">
                    <!-- Botón Cuentas -->
                    <button class="neumorphic-btn w-100 mb-4 d-flex align-items-center justify-content-center">
                        <i class="bi bi-bank btn-icon"></i>
                        <span class="btn-text">Cuentas</span>
                    </button>

                    <!-- Botón Gestión -->
                    <button class="neumorphic-btn w-100 mb-4 d-flex align-items-center justify-content-center">
                        <i class="bi bi-bar-chart btn-icon"></i>
                        <span class="btn-text">Gestión</span>
                    </button>

                    <!-- Botón Créditos -->
                    <button class="neumorphic-btn w-100 mb-4 d-flex align-items-center justify-content-center">
                        <i class="bi bi-wallet2 btn-icon"></i>
                        <span class="btn-text">Créditos</span>
                    </button>

                    <!-- Botón Reportes -->
                    <button class="neumorphic-btn w-100 mb-4 d-flex align-items-center justify-content-center">
                        <i class="bi bi-file-earmark-text btn-icon"></i>
                        <span class="btn-text">Reportes</span>
                    </button>

                    <!-- Botón Soporte -->
                    <button class="neumorphic-btn w-100 mb-4 d-flex align-items-center justify-content-center">
                        <i class="bi bi-headset btn-icon"></i>
                        <span class="btn-text">Soporte</span>
                    </button>

                    <!-- Botón Configuración -->
                    <button class="neumorphic-btn w-100 mb-4 d-flex align-items-center justify-content-center">
                        <i class="bi bi-gear btn-icon"></i>
                        <span class="btn-text">Configuración</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
