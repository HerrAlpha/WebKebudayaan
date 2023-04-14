<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IslandController;
use App\Http\Controllers\AdviceController;

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

// Optimasi Route
Route::view('/', 'opening');

Route::view('/home', 'indexcov');

Route::view('/pulau', 'pulau');

Route::view('/login', 'login');

Route::view('/explore-budaya', 'explore');

Route::view('/opening', 'opening');

Route::view('/tim-kita', 'jentTeam');

// Controller Login route
Route::get('/login-get', [UserController::class, 'showLoginForm'])->name('login-get');
// Route::post('/login-post', [UserController::class, 'login'])->name('login-post');
// Route::post('/register', [UserController::class, 'register'])->name('register');
// Route::post('/logout', [UserController::class, 'logout'])->name('logout');