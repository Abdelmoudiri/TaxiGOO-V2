<?php

use App\Http\Controllers\Auth\RegistredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//register routes
Route::get('/register',[RegistredUserController::class,'create']);
Route::post('/register',[RegistredUserController::class,'store']);

//login routes
Route::get('/login',[AuthenticatedSessionController::class,'create']);
Route::post('/login',[AuthenticatedSessionController::class,'store']);