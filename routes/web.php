<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CajeroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('bienvenidos');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(ClienteController::class)->group(function(){

    Route::get('inicio/persona','index')->name('inicio_persona');

    Route::get('principal/persona','principal')->name('principal_persona');

    Route::get('transferir/persona','transferir')->name('transferir_persona');

    Route::get('retiro/persona','retiro')->name('retiro_persona');

    Route::get('credito/persona','credito')->name('credito_persona');

    Route::get('credito/detalles/persona','credito_detalles')->name('credito_detalles_persona');

    Route::get('credito/solicitud/persona','credito_solicitud')->name('credito_solicitud_persona');

});

Route::controller(EmpresaController::class)->group(function(){

    Route::get('inicio/empresa', 'index')->name('inicio_empresa');

    Route::get('cuentas/empresa', 'cuentas')->name('cuentas_empresa');

    Route::get('gestion/cuentas/empresa', 'gestion_cuentas')->name('gestion_de_ceuntas');

    Route::get('nomina/empresa', 'nomina')->name('nomina_empresa');

    Route::get('transferir/empresa', 'transferir')->name('transferir_empresa');

    Route::get('extractos/empresa', 'extractos')->name('extractos_empresa');
});

Route::controller(AdminController::class)->group(function(){

    Route::get('inicio/admin', 'index')->name('inicio_admin');

    Route::get('producto/admin', 'producto')->name('producto_admin');

    Route::get('gestion/usuarios/admin', 'gestion_usuario')->name('gestion_de_usuarios');

    Route::get('editar/usuarios/admin', 'editar')->name('editar_admin');

    Route::get('estadistica/usuarios/admin', 'estadisticas')->name('estadisticas_admin');

});