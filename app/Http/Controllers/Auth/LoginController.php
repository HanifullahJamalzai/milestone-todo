<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function store(Request $request){
        // dd($request->all());

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:255'
        ]);
        // exit();
        if(!auth()->attempt($request->only('email', 'password'))){
            return redirect()->back();
        }
        else{
            auth()->attempt($request->only('email', 'password'), $request->remember);
            return redirect()->route('home');
        }
    }
}
