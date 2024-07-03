<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\EmailControllers;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/', [AuthController::class, 'Login']);
Route::get('/pay', function () {
    return view('chackout');
});

Route::get('/register', [AuthController::class, 'Register']);
Route::post('/register', [AuthController::class, 'RegisterPost'])->name('register.submit');
Route::get('/login', [AuthController::class, 'Login'])->name('login');
Route::post('/login', [AuthController::class, 'LoginPost'])->name('login.submit');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'Logout'])->name('logout');
    Route::get('/flats', [AuthController::class, 'Flats'])->name('flats');
    Route::post('/flats', [AuthController::class, 'FlatsPost'])->name('flats.submit');

    Route::get('/send-email-a', [EmailControllers::class, 'sendEmailA'])->name('sendEmailA');
    Route::get('/send-email-b', [EmailControllers::class, 'sendEmailB'])->name('sendEmailB');
    Route::get('/send-email-c', [EmailControllers::class, 'sendEmailC'])->name('sendEmailC');
    Route::get('/send-email-d', [EmailControllers::class, 'sendEmailD'])->name('sendEmailD');

    Route::get('/email',[DashboardController::class,'sendEmail'])->name('emailSendPage');
    Route::get('/payment-status',[DashboardController::class,'getsendEmaildata'])->name('paymentStatus');
});



Route::get('/payment/{id}', [BillController::class, 'index']);
