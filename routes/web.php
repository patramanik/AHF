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
Route::get('/login', [AuthController::class, 'Login']);