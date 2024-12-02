<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;  

Route::post('/register', [AuthController::class, 'register']);
Route::post('/verify-phone', [AuthController::class, 'verifyPhone']);
Route::post('login', [AuthController::class, 'login']);  
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');  
Route::post('/request-reset-code', [AuthController::class, 'requestResetCode']);
Route::post('/reset-password-with-code', [AuthController::class, 'resetPasswordWithCode']);
Route::get("/users",[AuthController::class,"index"])->middleware("auth:sanctum");
Route::get("/user/{user}",[AuthController::class,"show"])->middleware("auth:sanctum");
Route::put("/user/{user}",[AuthController::class,"update"])->middleware("auth:sanctum");
Route::delete("/user/{user}",[AuthController::class,"destroy"])->middleware("auth:sanctum");