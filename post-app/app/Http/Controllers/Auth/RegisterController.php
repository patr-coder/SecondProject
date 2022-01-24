<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{    
   public function index()
   {
       return view('auth/register');
   }

   public function store(Request $request)
   {
       
    $this->validate($request,[
        'name'=> 'required|max:255',
        'surname' => 'required|max:225',
        'email' => 'required|email|unique:users|max:255',
        'password' => 'required|confirmed|min:8',
    ]);

    User::create([
        'name'=>$request->name,
        'surname'=>$request->surname,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),

    ]);

    return redirect()->route('dashboard');
       
   }
}
