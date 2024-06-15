<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('register');
// });

Route::get('/register', [AuthController::class, 'Register']);
Route::post('/register', [AuthController::class, 'RegisterPost'])->name('register.submit');
Route::get('/login', [AuthController::class, 'Login']);
Route::post('/login', [AuthController::class, 'LoginPost'])->name('login.submit');
Route::get('/dashboard', [AuthController::class, 'Dashboard']);