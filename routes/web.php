<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AlquilerController;

Route::get('/', function () {
    return redirect()->route('libros');
});

// Tablas
Route::get('/libros', [PaginaController::class, 'libros'])->name('libros');
Route::get('/autores', [PaginaController::class, 'autores'])->name('autores');
Route::get('/usuarios', [PaginaController::class, 'usuarios'])->name('usuarios');
Route::get('/alquileres', [PaginaController::class, 'alquileres'])->name('alquileres');

// Añadir
Route::get('/libros/add', [LibroController::class, 'add'])->name('addLibro');
Route::get('/autores/add', [AutorController::class, 'add'])->name('addAutor');
Route::get('/usuarios/add', [UsuarioController::class, 'add'])->name('addUsuario');
Route::get('/alquileres/add', [AlquilerController::class, 'add'])->name('addAlquiler');

// Eliminar
Route::get('/libros/remove/{id}', [LibroController::class, 'remove'])->name('removeLibro');
Route::get('/autores/remove/{id}', [AutorController::class, 'remove'])->name('removeAutor');
Route::get('/usuarios/remove/{id}', [UsuarioController::class, 'remove'])->name('removeUsuario');
Route::get('/alquileres/remove/{id}', [AlquilerController::class, 'remove'])->name('removeAlquiler');

// Modificar
Route::get('/libros/edit/{id}', [LibroController::class, 'editForm'])->name('editLibroForm');
Route::post('/libros/edit', [LibroController::class, 'edit'])->name('editLibro');
Route::get('/autores/edit/{id}', [AutorController::class, 'editForm'])->name('editAutorForm');
Route::post('/autores/edit', [AutorController::class, 'edit'])->name('editAutor');
Route::get('/usuarios/edit/{id}', [UsuarioController::class, 'editForm'])->name('editUsuarioForm');
Route::post('/usuarios/edit', [UsuarioController::class, 'edit'])->name('editUsuario');
Route::get('/alquileres/edit/{id}', [AlquilerController::class, 'editForm'])->name('editAlquilerForm');
Route::post('/alquileres/edit', [AlquilerController::class, 'edit'])->name('editAlquiler');

// Buscar
Route::get('/libros/search', [LibroController::class, 'buscar'])->name('buscarLibro');
Route::get('/autores/search', [AutorController::class, 'buscar'])->name('buscarAutor');
Route::get('/usuarios/search', [UsuarioController::class, 'buscar'])->name('buscarUsuario');
Route::get('/alquileres/search', [AlquilerController::class, 'buscar'])->name('buscarAlquiler');

require __DIR__.'/auth.php';
