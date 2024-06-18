<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('/proyectos-view',[App\Http\Controllers\ProyectoViewController::class, 'index'])->name('proyectos-view');

Route::get('/perfil',[App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');


Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');


Route::post('/enviar-correo', [App\Http\Controllers\ContactController::class, 'enviarCorreo'])->name('enviar.correo');


Auth::routes();


Route::resource('proyectos', App\Http\Controllers\ProyectoController::class);

Route::resource('experiencias', App\Http\Controllers\ExperienciaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
