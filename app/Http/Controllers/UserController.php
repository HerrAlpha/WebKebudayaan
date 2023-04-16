<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function prosesUserValidator(Request $request){ // ini bisa dikembangkan lagi
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|min:8',
        ]); // sesuaikan inputan di view dengan di controller

        $message = [
            'required' => 'Form ini harus diisi.',
            'min' => 'Karakter minimal :min karakter.',
            'max' => 'Karakter maksimal :max karakter.',
        ];

        $username = $request->input('username');
        $password = $request->input('password');

        echo $username;
        echo $password;
        
        
    }
}
