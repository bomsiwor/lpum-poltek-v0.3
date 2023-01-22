<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name("pagu");
    Route::get('/coblos', [DashboardController::class, 'vote'])->name("coblos");
    Route::get('/hasil', [DashboardController::class, 'hasil'])->name("hasil");
    Route::get('/kelola-user', [DashboardController::class, 'manageUser'])->name("manage-user");
    Route::get('/profil', [DashboardController::class, 'profile'])->name("profil");
});
