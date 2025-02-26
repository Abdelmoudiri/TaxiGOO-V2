<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class AuthenticatedSessionController extends Controller
{
    
    public function create(){
        return view("auth.login");
    }

    public function store(Request $request){

        $attributes = $request->validate(
            [
                'email'=>['required','email'],
                'password'=>['required']
            ]
            );

        if(Auth::attempt($attributes)){

            $request->session()->regenerate();

            return redirect()->intended('driver');
        }

        return back()->withErrors([
            
            'email'=>'the provided crédentials do not mustch our records.'
        ])->onlyInput('email');
    }
}
