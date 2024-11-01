<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorVistas;

/* Route::view('/', 'inicio')->name('rutainicio');
Route::view('/registro','registro')->name('rutaregistro'); */

Route::get('/', [ControladorVistas::class, 'inicio'])->name('rutainicio');
Route::get('/registro', [ControladorVistas::class, 'registro'])->name('rutaregistro');
Route::post('/registroLibro', [ControladorVistas::class, 'procesaRegistro'])->name('rutaconfirmaenvio');

?>