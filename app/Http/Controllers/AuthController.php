<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// auth
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        // if($user = Auth::user()) {
        //     if ($user->role == 'admin') {
        //         // return redirect('/pulau');
        //         return view('pulau');
        //     } else if ($user->role == 'user') {
        //         // return redirect('/pulau');
        //         return view('pulau');
        //     }
        // }
        return view('login.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect('/home/pulau');
            } else if ($user->role == 'user') {
                return redirect('/home/pulau');
            }
        }   

        return back()->withErrors([
            'username' => 'Username or Password is incorrect',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
