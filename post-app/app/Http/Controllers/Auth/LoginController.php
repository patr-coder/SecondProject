<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)

    {
        //$message = array(
            //'require.mail' => 'This is required',
           // 'required.password' => 'This is required',
       // );
        $this->validate($request, [
            'email' => ' required|email|',
            'password' => 'required',
        ]); //$message

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid login details');
        }
        return redirect()->route('dashboard');
    }

    


}



