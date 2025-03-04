<?php

use App\Http\Controllers\Auth\RegistredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('index');
});
Route::get('/admin',function()
{
    return view('dashboards.admin');
});

// google
Route::get('/auth/google/redirect',function(Request $request)
{
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/google/callback',function(Request $request)
{
   $google_user = Socialite::driver('google')->user();
   $user=User::updateOrCreate(
    ['google_id'=> $google_user->id],
    [

        'name' => $google_user->name,
            'email' => $google_user->email,
            'password' => Str::random(12), 
            'firstname' => $google_user->user['given_name'], 
            'lastname' => $google_user->user['family_name'],
    ]
    );
    Auth::login($user);
    return redirect('/profile');
});





Route::middleware(['auth'])->group(function(){

    Route::get('/profile',[ProfileController::class,'index']);
    Route::post('/profile',[ProfileController::class,'update']);
    Route::post('/profile/photo',[ProfileController::class,'updatePhoto']);
    Route::get('/reservations',[ReservationController::class,'reservations']);
    
});

Route::get('/drivers',[DriverController::class,'index']);

Route::middleware(['auth','is_driver:driver'])->group(function(){
    Route::get('/driver',[DriverController::class,'show']);
    Route::get('/driver/updateStatus',[DriverController::class,'updateStatus']);
    Route::get('/reservations/accept/{id}',[ReservationController::class,'accept']);
    Route::get('/reservations/refuse/{id}',[ReservationController::class,'refuse']);
});

Route::middleware(['auth','is_passenger:passenger'])->group(function(){
    Route::get('/passenger',[PassengerController::class,'show']);
    Route::post('/reserve',[ReservationController::class,'store']);
    Route::get('/reservations/{id}',[ReservationController::class,'cancel']);
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
