<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\GetbyIdController;
use App\Http\Controllers\GetController;
use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', CreateController::class);


Route::get('/delete/{Id}', DeleteController::class);

Route::get('/getbyid/{Id}', GetbyIdController::class);

Route::get('/get', GetController::class);

Route::get('/update/{Id}', UpdateController::class);


