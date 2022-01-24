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

    public function login(Request $request){

        $message = array(
            'required.email'    =>  'This is required',
            'required.password' =>  'This is required',
        );
        $this->validate($request,[
            'email' =>  'required',
            'password'  =>  'required',
        ],$message);
    
        $email = $request->email;
        $pass = $request->password;
    
        if(auth::attempt(['email' => $email, 'password' => $pass, 'status' => 1])){
            Session::flash('success','Welcome '.Auth::user()->name);
            return redirect()->route('dashboard');
        }else{
            Session::flash('error','Sorry! Try Again. It seems your login credential is not correct.');
            return redirect()->back();
        }
    
    }


}



