<?php

use App\Http\Controllers\AchievementsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BloodController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\MatrimonyController;
use App\Http\Controllers\MemorialController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login-ajax', [AuthController::class, 'login'])->name('login.ajax');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('switch-language/{language}', [DashboardController::class, 'switchLanguage'])->name('switch.language');

    Route::get('matrimony',[MatrimonyController::class,'index'])->defaults('type', 'male')->name('matrimony.index');
    Route::resource('matrimony',MatrimonyController::class)->except(['index']);

    Route::resource('directory',DirectoryController::class);
    
    Route::resource('business',BusinessController::class);
    
    Route::resource('memorial',MemorialController::class);
    
    Route::resource('achievements',AchievementsController::class);
    
    Route::resource('history',HistoryController::class);

    Route::resource('gallery',GalleryController::class);

    Route::resource('news',NewsController::class);

    Route::resource('donors',BloodController::class);

    Route::resource('events',EventsController::class);

    Route::resource('transactions',TransactionsController::class);

    Route::resource('profile',ProfileController::class);

});