<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/equipos');

Route::resource('equipos', EquipoController::class);
Route::resource('jugadores', JugadorController::class);
