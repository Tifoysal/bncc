<?php

namespace App\Http\Controllers;
use App\User;
//use session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) 
        {
            if(auth()->user()->status=='Active')
            {
            return redirect()->route('puo.dashboard');    
            }
            Auth::logout();
        //session::flush();
        return redirect()->route('login');
            
        }

        return redirect()->back()->with('message','Invalid User credentials');
    }

    public function logout()
    {
        Auth::logout();
        //session::flush();
        return redirect()->route('login');
    }
}
