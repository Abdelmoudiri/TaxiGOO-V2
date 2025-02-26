<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{
    public function index(){
        $drivers = DB::table('users')->where('account_type','=','driver')
        ->join('drivers','users.id','=','drivers.user_id')->get();
        return view('drivers.index',['drivers'=>$drivers]);
    }

    public function show(){
        return view('dashboards.driver');
    }
}
