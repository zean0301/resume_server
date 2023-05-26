<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageBoardController;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});

Route::get('/', [MessageBoardController::class, 'getData'])->name('index');
Route::post('/updateData', [MessageBoardController::class, 'updateData'])->name('update');
Route::post('/deleteData', [MessageBoardController::class, 'deleteData'])->name('delete');
Route::post('/sendMessage', [MessageBoardController::class, 'insertData']);