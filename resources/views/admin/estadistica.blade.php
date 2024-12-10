@extends('layouts.admin')

@section('content')
<main class="col-md-10 dashboard-container">
    <div class="container my-5">
        <h1 class="mb-4">Dashboard Clientes</h1>
        
        <!-- Statistics Row -->
        <div class="row">
            <div class="col-md-3">
                <div class="card stat-card p-3">
                    <h5>Usuarios Totales</h5>
                    <h2>15,432</h2>
                    <p class="text-success">8.5% Up from yesterday</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card p-3">
                    <h5>Total Productos Adquiridos</h5>
                    <h2>10,293</h2>
                    <p class="text-success">1.3% Up from past week</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card p-3">
                    <h5>Total Ventas</h5>
                    <h2>$89,000</h2>
                    <p class="text-danger">4.3% Down from yesterday</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card p-3">
                    <h5>En Mora</h5>
                    <h2>2040</h2>
                    <p class="text-success">1.8% Up from yesterday</p>
                </div>
            </div>
        </div>

        <!-- Sales Details Chart -->
        <div class="chart-container my-4">
            <h4>Detalles Ventas</h4>
            <canvas id="salesChart" width="400" height="200"></canvas> <!-- Elemento canvas -->
        </div>

        <!-- Product Details Table -->
        <div class="table-container my-4">
            <div style="color: rgb(20, 20, 21)">
                <h4>Detalles Productos</h4>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Cliente</th>
                        <th>Date - Time</th>
                        <th>Cantidad</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cuenta de Ahorros</td>
                        <td>Juan Perez</td>
                        <td>12.09.2019 - 12:53 PM</td>
                        <td>$34,295</td>
                        <td><span class="badge bg-success">Abierta</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        window.onload = function() {
            // Configuración de la gráfica
            const ctx = document.getElementById('salesChart').getContext('2d');
            const salesChart = new Chart(ctx, {
                type: 'line', // Tipo de gráfica
                data: {
                    labels: ['5k', '10k', '15k', '20k', '25k', '30k', '35k', '40k', '45k', '50k', '55k', '60k'], // Etiquetas del eje X
                    datasets: [{
                        label: 'Ventas (%)',
                        data: [10, 30, 50, 64, 20, 40, 50, 30, 60, 45, 35, 55], // Datos de ejemplo
                        borderColor: 'rgba(54, 162, 235, 1)',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
                        }
                    }
                }
            });
        };
    </script>
    
</main>
@endsection