<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreeDController extends Controller
{
    public function home()
    {
        return view('indexcov');
    }
    public function pulau()
    {
        return view('pulau');
    }
    public function login()
    {
        return view('login');
    }
    public function explore()
    {
        return view('explore');
    }
    public function opening()
    {
        return view('opening');
    }
}
