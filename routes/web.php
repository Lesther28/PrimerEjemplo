<?php

use App\Http\Controllers\peliculasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas', [peliculasController::class, 'index'])->name('pelicula.inicio');
Route::get('/peliculas/agregar', [peliculasController::class, 'crear'])->name('agregar.pelicula');

Route::post('/peliculas/guardar', [peliculasController::class, 'store'])->name('pelicula.store');

Route::get('/peliculas/editar/{id}', [peliculasController::class, 'edit'])->name('pelicula.edit');

Route::put('/peliculas/actualizar/{id}', [peliculasController::class, 'actualizar'])->name('pelicula.actualizar');

Route::get('/peliculas/eliminar/{id}', [peliculasController::class, 'eliminar'])->name('pelicula.eliminar');

Route::get('/peliculas/destroy/{id}', [peliculasController::class, 'destroy'])->name('pelicula.destroy');