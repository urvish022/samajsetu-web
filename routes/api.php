<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('send-fcm-notification',[NotificationController::class,'sendNotification']);
Route::post('send-reset-password-email',[NotificationController::class,'sendResetPasswordEmail']);
Route::post('approve-member',[AuthController::class,'approveMember']);