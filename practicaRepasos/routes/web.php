<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio')->name('rutainicio');
Route::view('/rep', 'repaso1')->name('rutarepaso1');

