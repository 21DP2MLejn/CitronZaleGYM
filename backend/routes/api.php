<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\TrialController;
use App\Http\Controllers\Api\ReservationController;
use App\Http\Controllers\Api\ScheduleController;


// Open routes

Route::middleware(['cors'])->group(function () {
    Route::post('/register', [ApiController::class, 'register']);
    Route::post('/login', [ApiController::class, 'login']);
    Route::get('/check-login', [ApiController::class, 'checkLoginStatus']);
    Route::post('/api/send-trial-email', [TrialController::class, 'sendTrialEmail']);
    Route::get('/schedule', [ScheduleController::class, 'index']);
    Route::post('api/reserve', [App\Http\Controllers\Api\ReservationController::class, 'store']);
    Route::delete('api/cancel-reservation/{id}', [ReservationController::class, 'destroy']);
});

//Protected routes

Route::middleware(['auth:api'])->group(function () {
    Route::get('/profile', [ApiController::class, 'profile']);
    Route::post('/logout', [ApiController::class, 'logout']);
    Route::delete('/delete-account', [ApiController::class, 'deleteAccount']);
    Route::put('/profile', [ApiController::class, 'updateProfile']);

});