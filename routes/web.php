<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\GameInformationController;
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
})->name('kam.bp');

Route::get('/information', [GameInformationController::class, 'gameInformation'])->name('game.information');
Route::get('/attendance/index/{game_no}', [AttendanceController::class, 'index'])->name('attendance.index');
Route::post('/attendance/store', [AttendanceController::class, 'store'])->name('attendance.store');
Route::get('/attendance/edit/{player_no}', [AttendanceController::class, 'edit'])->name('attendance.edit');
Route::post('/attendance/update', [AttendanceController::class, 'update'])->name('attendance.update');
Route::delete('/attendance/delete/{player_no}', [AttendanceController::class, 'delete'])->name('attendance.delete');
// Route::get('/login', function() {
//     return view('login');
// })->name('login');
Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');

// 認証
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/game/index', [GameController::class, 'index'])->name('admin.game.index');
Route::get('/admin/game/create', [GameController::class, 'create'])->name('admin.game.create');
Route::post('/admin/game/store', [GameController::class, 'store'])->name('admin.game.store');
Route::get('/admin/game/edit/{game_no}', [GameController::class, 'edit'])->name('admin.game.edit');
Route::post('/admin/game/update', [GameController::class, 'update'])->name('admin.game.update');
Route::delete('/admin/game/delete/{game_no}', [GameController::class, 'delete'])->name('admin.game.delete');