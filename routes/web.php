<?php

use App\Http\Controllers\user\SigninController;
use App\Http\Controllers\user\SignupController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// ============ GET REQUESTS ============= //

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [SigninController::class, 'index'])->name('index');
Route::get('/register', [SignupController::class, 'index'])->name('index');



// ============ POST REQUESTS =========== //
Route::post('/login', [SigninController::class, 'login'])->name('login');
Route::post('/register', [SignupController::class, 'register'])->name('register');

