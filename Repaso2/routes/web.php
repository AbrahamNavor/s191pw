<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorVistas;

/* Route::view('/', 'inicio')->name('rutainicio');
Route::view('/registro','registro')->name('rutaregistro'); */

Route::get('/', [controladorVistas::class, 'inicio'])->name('rutainicio');
Route::get('/registro', [controladorVistas::class, 'registro'])->name('rutaregistro');

Route::post('/registroLibro', [controladorVistas::class, 'procesaRegistro'])->name('rutaconfirmaenvio');

?>