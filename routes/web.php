<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ChangePasswordController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function (): void {
    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/iniciar-sesion', [AuthenticatedSessionController::class, 'store'])->name('login.store');
});

Route::middleware('auth')->group(function (): void {
    Route::post('/cerrar-sesion', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/cambiar-contrasena', [ChangePasswordController::class, 'edit'])->name('password.change');
    Route::put('/cambiar-contrasena', [ChangePasswordController::class, 'update'])->name('password.update');
    Route::middleware('password.changed')->group(function (): void {
        Route::get('/inicio', fn () => view('vistas_prueba.inicio'))->name('dashboard');

        Route::middleware('role:ADMINISTRATOR,ADMINISTRATIVE')->group(function (): void {
            Route::view('/pacientes/registrar', 'vistas_prueba.regispaciente')->name('patients.create');
            Route::view('/pacientes/actualizar', 'vistas_prueba.actualizarpacien')->name('patients.edit');
            Route::view('/pacientes/detalle', 'vistas_prueba.detallepaci')->name('patients.show');
            Route::view('/psicologos/registrar', 'vistas_prueba.regispsicologo')->name('psychologists.create');
            Route::view('/psicologos/actualizar', 'vistas_prueba.actualizarpsi')->name('psychologists.edit');
            Route::view('/psicologos/detalle', 'vistas_prueba.detallepsico')->name('psychologists.show');
        });

        Route::view('/usuarios', 'vistas_prueba.gestionusuarios')
            ->middleware('role:ADMINISTRATOR')
            ->name('users.index');
    });
});
