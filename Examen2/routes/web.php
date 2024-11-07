<?php

use App\Http\Controllers\Peticiones;
use Illuminate\Support\Facades\Route;

Route::get('/', [Peticiones::class,'welcome'])->name('rutaindex');
Route::post('/peticion', [Peticiones::class,'peticion'])->name('rutapeticion');
