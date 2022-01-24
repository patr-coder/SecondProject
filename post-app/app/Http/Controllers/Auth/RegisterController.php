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
           // dd($request->only('email','password'));
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:225',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);
         
        auth()->attempt($request->only('email','password'));
            
        

        return redirect(('/dashboard'));
        //return redirect()->route('dashboard');

    }
}
