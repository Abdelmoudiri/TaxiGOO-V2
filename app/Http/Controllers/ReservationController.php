<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    
    public function reservations(){
        $condition = 'user_id';
        $redirection = '/passenger';
        if(Auth::user()->account_type == "driver"){
            $condition = 'driver_id';
            $redirection = '/driver';
        }

        $reservations = Reservation::with('driver')
        ->join('users','reservations.user_id','=','users.id')
        ->join('drivers','reservations.driver_id','=','drivers.id')
        ->where('reservations.'.$condition,'=',Auth::user()->id)
        ->get();

        $drivers = DB::table('drivers')
        ->join('users','drivers.user_id','=','users.id')
        ->get();

        // $reservations['drivers'] = $drivers;
        // dd($reservations);

        return view('dashboards'.$redirection,['reservations'=>$reservations]);
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'date'=>'required',
            'location'=>'required | string',
            'destination'=>'required | string'
        ]);

        $validated['driver_id'] = $request->driverid;
        $validated['user_id'] = Auth::user()->id;

        Reservation::create($validated);

        return redirect('/drivers');
    }


}
