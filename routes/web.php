<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreeDController;

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

// Route::get('/', [ThreeDController::class, 'opening']);

// Route::get('/home', [ThreeDController::class, 'home']);

// Route::get('/pulau', [ThreeDController::class, 'pulau']);

// Route::get('/login', [ThreeDController::class, 'login']);

// Route::get('/explore-budaya', [ThreeDController::class, 'explore']);

// Route::get('/opening', [ThreeDController::class, 'opening']);

// Route::get('/tim-kita', [ThreeDController::class, 'opening']);

// Optimasi Route
Route::view('/', 'opening');

Route::view('/home', 'indexcov');

Route::view('/pulau', 'pulau');

Route::view('/login', 'login');

Route::view('/explore-budaya', 'explore');

Route::view('/opening', 'opening');

Route::view('/tim-kita', 'jentTeam');