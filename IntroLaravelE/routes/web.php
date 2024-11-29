<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;

Route::resource('cliente', clienteController::class);
Route::get('/', [clienteController::class, 'home'])->name('rutainicio');