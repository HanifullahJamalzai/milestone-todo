<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:255|confirmed'
        ]);

     
        
        // User::create($data);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        $user->password = bcrypt($request->password);


        //    dd($request->photo);
        // dd($request->file('photo'));
        if($request->hasFile('photo')){
            // return 'yes file exist';
            // return $request->photo->getClientOriginalName();
            // return $request->photo->extension();
            // We are not going to use below method because we have to save the file name into db
            // $request->photo->store('images', 'public');
            // $fileName = $request->photo->getClientOriginalName();
            
            $fileName = date('YmdHis').'_'.$request->name.'_'.rand(10,10000).'.'.$request->photo->extension();
            // dd($fileName);
            $request->photo->storeAs('images', $fileName, 'public');
            $user->photo = 'storage/images/'.$fileName;
        }


        $user->save();

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('home');
        
    }
}
