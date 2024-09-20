<?php

use App\Http\Controllers\AsignarController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\ConvergeController;
use App\Http\Controllers\DetalleProductoController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes/web.php
Route::get('/search', [ProductoController::class, 'search'])->name('productos.search');
Route::get('/', [ProyectoController::class, 'index'])->name('inicio');
Route::get('/Nosotros', [ProyectoController::class, 'indexNosotros'])->name('nosotros');
Route::get('/EyF', [ProyectoController::class, 'indexEyF'])->name('ruta_eyf');
Route::get('/FormacionConsultorias', [ProyectoController::class, 'indexFC'])->name('ruta_FC');
Route::get('/GestiónEmpresarial', [ProyectoController::class, 'indexGestionE'])->name('ruta_GE');
Route::get('/GestionEmpresas', [ProyectoController::class, 'indexGestionEmpresas'])->name('ruta_GEmpresas');
Route::get('/IPSGerencial', [ProyectoController::class, 'indexIPS'])->name('ruta_IPS');
Route::get('/V2', [ProductoController::class, 'index'])->name('ruta_V2');
Route::get('/V2/BotiquinTipoA', [ProyectoController::class, 'indexBotiquin'])->name('ruta_botiquin');
Route::get('/Blog', [ConvergeController::class, 'index'])->name('ruta_blog');
Route::get('/Seguridad', [ProyectoController::class, 'indexSeguridad'])->name('ruta_Seguridad');
Route::get('/V2/{id}', [ProductoController::class, 'show'])->name('producto.informacion');
Route::get('/servicios', [ProyectoController::class, 'indexServicios'])->name('ruta_services');
Route::get('/GestionCalidad', [ProyectoController::class, 'indexGestionCalidad'])->name('ruta_gestion_calidad');
Route::get('/gestionDesarrollo', [ProyectoController::class, 'indexGestionDesarrollo'])->name('ruta_gestion_desarrollo');
Route::get('/GestionIps', [ProyectoController::class, 'indexGestionIps'])->name('ruta_gestion_Ips');
Route::get('/FormacionContinua', [ProyectoController::class, 'indexFormacionContinua'])->name('ruta_formacion_continua');

Route::middleware(['auth'])->group(function () {

    Route::middleware(['auth', 'can:Admin Configuracion'])->group(function () {
        Route::get('/Usuarios', [UserController::class, 'index'])->name('ruta_Users');
        Route::get('/Roles', [RoleController::class, 'index'])->name('ruta_Roles');
        Route::get('/Permisos', [PermisoController::class, 'index'])->name('ruta_Perm');
        Route::resource('roles', RoleController::class);
        Route::resource('permisos', PermisoController::class);
        Route::resource('usuarios', AsignarController::class)->names('asignar');
        Route::resource('users', UserController::class);
        Route::post('/create-all-roles', [RoleController::class, 'createAllRoles'])->name('create-all-roles');
        Route::post('/create-all-permisos', [PermisoController::class, 'createAllPermisos'])->name('create-all-permisos');
    });

    Route::resource('productos', ProductoController::class);
    Route::resource('detalleproductos', DetalleProductoController::class);
    Route::resource('blogs', ConvergeController::class);
    Route::get('/V2/detalles/{id}', [DetalleProductoController::class, 'showDetallesModal'])->name('producto.detalles.modal');
    Route::delete('/V2/{id}', [ProductoController::class, 'destroy']);
    Route::delete('/eliminar-detalle/{idDetalle}', [DetalleProductoController::class, 'eliminarDetalle'])->name('eliminar.detalle');
    // Route::delete('/noticias/{id}', [ConvergeController::class, 'destroy'])->name('noticias.destroy');
    // Route::delete('/noticias/{id}', [ConvergeController::class, 'destroyV'])->name('noticias.destroyV');
}); 

Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('reset-password/{token}', [NewPasswordController::class, 'showResetForm'])
    ->name('password.reset');

Route::post('reset-password', [NewPasswordController::class, 'reset'])
    ->name('password.update');