<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorvistas;

/* Rutas para trabajar con el controlador vistas*/
Route::get('/', [controladorvistas::class, 'home'])->name('rutainicio');
Route::get('/consultar', [controladorvistas::class, 'select'])->name('rutaconsulta');
Route::post('/enviarCliente', [controladorvistas::class, 'procesarCliente'])->name('rutaenvia');
Route::view('/component', 'componentes')->name('rutacomponent');



/*Rutas para trabajar con ClienteController*/
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutacacas');
