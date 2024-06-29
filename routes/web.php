<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\EmailControllers;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'Login']);
// Route::get('/bill', function () {
//     return view('bill');
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
    Route::get('/flats', [AuthController::class, 'Flats'])->name('flats');
    Route::post('/flats', [AuthController::class, 'FlatsPost'])->name('flats.submit');
});

Route::get('/send-email-a', [EmailControllers::class, 'sendEmailA'])->name('sendEmailA');
Route::get('/send-email-b', [EmailControllers::class, 'sendEmailB'])->name('sendEmailB');
Route::get('/send-email-c', [EmailControllers::class, 'sendEmailC'])->name('sendEmailC');
Route::get('/send-email-d', [EmailControllers::class, 'sendEmailD'])->name('sendEmailD');

Route::get('/payment/{id}',[BillController::class, 'index']);
