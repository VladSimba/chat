<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function (){

    Route::get('/chat-home', [ChatController::class, 'index'])
        ->name('chat-home');

    Route::post('/logout',[AuthController::class, 'logoutProcess'])
        ->name('logout-process');

    Route::get('/account', [UserController::class, 'showAccountPage'])
        ->name('account');

    Route::post('/account', [UserController::class, 'editAccountFormProcess'])
        ->name('edit-account-form-process');

    Route::get('/edit-chat/{chat}', [ChatController::class, 'showChatEditForm'])
        ->name('show-edit-chat');

    Route::post('/edit-chat/{chat}', [ChatController::class, 'chatEditFormProcess'])
        ->name('edit-chat-form-process');

    Route::get('/chat/{chat}',[ChatController::class, 'showChatForm'])
        ->name('chat');

    Route::post('/chat/{chat}/massage', [MessageController::class, 'addMessageProcess'])
        ->name('add-massage');

    Route::get('/add-chat', [ChatController::class, 'addChatForm'])
        ->name('add-chat');

    Route::post('/add-chat',[ChatController::class,'addChatProcess'])
        ->name('add-chat-process');

    Route::post('/delete-chat/{chat}', [ChatController::class, 'deleteChatProcess'])
        ->name('delete-chat');

    Route::post('/delete-message/{message}', [ChatController::class, 'deleteMessageProcess'])
        ->name('delete-message');

    Route::post('/edit-message/{message}', [MessageController::class, 'editMessageProcess'])
        ->name('edit-message');
});
Route::get('/registration', [AuthController::class, 'showRegistrationForm'])
    ->name('show-registration-form');

Route::post('/registration', [AuthController::class, 'registrationProcess'])
    ->name('registration-form-process');

Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login', [AuthController::class, 'loginProcess'])
    ->name('login-form-process');



