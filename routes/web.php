<?php

use App\Http\Controllers\GameInformationController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('kam_bp');
});

Route::get('/information', [GameInformationController::class, 'gameInformation'])->name('game_information');
Route::get('/attendance', [GameInformationController::class, 'attendance'])->name('attendance');
Route::get('/login', [LoginController::class, 'authenticate'])->name('login');