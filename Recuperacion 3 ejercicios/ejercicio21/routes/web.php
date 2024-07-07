<?php

use App\Http\Controllers\ViajeroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('viajeros', ViajeroController::class);
