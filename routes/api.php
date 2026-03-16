<?php

use App\Http\Controllers\Api\EquipoApiController;
use App\Http\Controllers\Api\JugadorApiController;
use Illuminate\Support\Facades\Route;

Route::apiResource('equipos', EquipoApiController::class)->names('api.equipos');
Route::apiResource('jugadores', JugadorApiController::class)->names('api.jugadores');
