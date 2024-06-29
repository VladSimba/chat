<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function (){
    Route::get('/', function () {
        return 123;
    })->name('chat');

    Route::post('/logout',[AuthController::class, 'logoutProcess'])
        ->name('logout-process');

    Route::get('/account', [UserController::class, 'showAccountPage'])
        ->name('account');

    Route::post('/account', [UserController::class, 'editAccountFormProcess'])
        ->name('edit-account-form-process');
});
Route::get('/registration', [AuthController::class, 'showRegistrationForm'])
    ->name('show-registration-form');

Route::post('/registration', [AuthController::class, 'registrationProcess'])
    ->name('registration-form-process');

Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('show-login-form');

Route::post('/login', [AuthController::class, 'loginProcess'])
    ->name('login-form-process');
