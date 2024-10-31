<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorVistas;

/* Route::view('/', 'inicio')->name('rutainicio');
Route::view('/registro','registro')->name('rutaregistro'); */

Route::get('/', [controladorVistas::class, 'inicio'])->name('rutainicio');
Route::get('/registro', [controladorVistas::class, 'registro'])->name('rutaregistro');

?>