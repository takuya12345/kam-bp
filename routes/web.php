<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AttendanceController;
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
// Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
// Route::post('/admin/users/store', [UserController::class, 'store'])->name('admin.users.store');
// Route::get('/login', [LoginController::class, 'authenticate'])->name('login');