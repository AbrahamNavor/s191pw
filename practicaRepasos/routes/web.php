<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorConvertidor;

Route::get('/', [controladorConvertidor::class,'inicio'])->name('rutainicio');
Route::get('/rep', [controladorConvertidor::class,'repaso1'])->name('rutarepaso1');
Route::post('/convertidor', [controladorConvertidor::class,'convertidor'])->name('rutaconvertidor');

