<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});



// Open routes
Route::middleware(['cors'])->group(function () {
    Route::post('/register', [ApiController::class, 'register']);
    Route::post('/login', [ApiController::class, 'login']);
    Route::get('/check-login', [ApiController::class, 'checkLoginStatus']);
});


// Protected routes
Route::group([
    "middleware" => "auth:api"
], function (){
    Route::get('/profile', [ApiController::class, 'profile']);
    Route::post('/logout', [ApiController::class, 'logout']);
    Route::post('/reserve', [ReservationController::class, 'store']);
    Route::delete('/delete-account', [ApiController::class, 'deleteAccount']);
    Route::middleware('auth:api')->put('/profile', [ApiController::class, 'updateProfile']);
});