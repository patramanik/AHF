<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthController::class, 'Login']);
// Route::get('/', function () {
//     return view('register');
// });

Route::get('/register', [AuthController::class, 'Register']);
Route::post('/register', [AuthController::class, 'RegisterPost'])->name('register.submit');
Route::get('/login', [AuthController::class, 'Login'])->name('login');
Route::post('/login', [AuthController::class, 'LoginPost'])->name('login.submit');
// Route::get('/dashboard', [AuthController::class, 'Dashboard']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth')->name('dashboard');
// Route::get('/logout',[AuthController::class.'Logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'Dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'Logout'])->name('logout');
});
