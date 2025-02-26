<?php

use App\Http\Controllers\Auth\RegistredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth'])->group(function(){
    Route::get('profile',[ProfileController::class,'index']);
});

Route::get('/drivers',[DriverController::class,'index']);

Route::middleware(['auth','is_driver:driver'])->group(function(){
    Route::get('/driver',[DriverController::class,'show']);
});

Route::middleware(['auth','is_passenger:passenger'])->group(function(){
    Route::get('/passenger',[PassengerController::class,'show']);
});

Route::get('/logout',[AuthenticatedSessionController::class,'logout']);

Route::middleware(['guest'])->group(function(){
    //register routes
    Route::get('/register',[RegistredUserController::class,'create']);
    Route::post('/register',[RegistredUserController::class,'store']);

    //login routes
    Route::get('/login',[AuthenticatedSessionController::class,'create']);
    Route::post('/login',[AuthenticatedSessionController::class,'login']);
});
