<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('/proyectos-view', function () {
    return view('proyectos');
})->name('proyectos-view');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Auth::routes();

Route::resource('proyectos', App\Http\Controllers\ProyectoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
