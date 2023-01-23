<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

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

Route::controller(DashboardController::class)->prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', 'index')->name("pagu");
    Route::get('/coblos', 'vote')->name("coblos");
    Route::get('/hasil', 'hasil')->name("hasil");
    Route::get('/kelola-user', 'manageUser')->name("manage-user");
    Route::get('/profil', 'profile')->name("profil");
});

Route::prefix('surat')->group(function () {
    Route::get('/kirim', [EmailController::class, 'index'])->name('kirim-email');
    Route::get('/kirim-banyak', [EmailController::class, 'bulkEmail'])->name('banyak-email');
});

Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(VoteController::class)->prefix('vote')->group(function () {
    Route::get('/add-role', 'addRole');
    Route::post('/verify', 'verify')->name('verify');
    Route::post('/unverify', 'unverify')->name('unverify');
});

Route::controller(UserController::class)->prefix('user')->group(function () {
    Route::get('/detail/{user:nim}', 'userDetail')->name('user-detail');
});
