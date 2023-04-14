<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// auth
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if($user = Auth::user()) {
            if ($user->role == 'admin') {
                return redirect('/admin');
            } else if ($user->role == 'user') {
                return redirect('/user');
            }
        }
    }
}
