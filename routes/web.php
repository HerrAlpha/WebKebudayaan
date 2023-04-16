<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Requests;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdviceController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Begining Route
Route::get('/', function () {
    return view('opening');
});

// Konten Route
Route::get('/home', function () {
    return view('indexcov');
})->name('home');

Route::get('/home/pulau', function () {
    return view('pulau');
})->name('home.pulau');

// Login Route
// Route::controller(AuthController::class)->group(function () {
//     Route::get('/login', 'login')->name('login');
//     Route::post('/login', 'loginPost')->name('login.post');
//     Route::get('/logout', 'logout')->name('logout'); 
// });

// sign up & log in validator
Route::post('/login', [UserController::class, 'prosesUserValidator']);

// Saran Route
Route::get('/saran', [AdviceController::class, 'index'])->name('saran.index');
Route::post('/saran', [AdviceController::class, 'store'])->name('saran.store');
