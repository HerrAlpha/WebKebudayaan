<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreeDController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function pulau()
    {
        return view('pulau');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
}
