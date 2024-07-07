<?php

use App\Http\Controllers\PartidoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::resource('partidos', PartidoController::class);
