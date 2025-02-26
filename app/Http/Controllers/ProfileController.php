<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
    public function index(){
        $user = User::find(Auth::user()->id);
        
        if($user->account_type == "driver"){
            $driver = Driver::where('user_id' ,'=', $user->id)->get();
        }
        return view('profile.index',['user'=>$user,'driver'=>$driver[0]]);
    }

}
