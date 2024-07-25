<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\GetbyIdController;
use App\Http\Controllers\GetController;
use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GetController::class, 'index']);
Route::get('/create', [CreateController::class, 'show']);
Route::post('/create', [CreateController::class, 'store']);
Route::get('/delete/{id}', DeleteController::class);
Route::get('/getbyid/{id}', GetbyIdController::class);
Route::get('/update/{id}', UpdateController::class);