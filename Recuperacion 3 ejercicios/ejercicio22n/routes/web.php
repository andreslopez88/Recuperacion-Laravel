<?php

use App\Http\Controllers\CollaboratorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Collaborator', CollaboratorController::class);
Route::get('collaborators/{collaborator}', 'CollaboratorController@show');
