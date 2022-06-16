<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\TipeKamarController;
use App\Http\Controllers\FasilitasKamarController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Logout;

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
    return view('user.pemesanans.home');
});
Route::get('/home', function () {
    return view('user.pemesanans.home');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication'])->name('authentication');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('logout')->middleware('auth');

Route::resource('pemesanans', PemesananController::class)->middleware('auth');
Route::get('print/{id}', [PrintController::class, 'generatePDF'])->middleware('auth');

Route::resource('reservasi', ReservasiController::class)->middleware('resepsionis');

Route::resource('tipekamars', TipeKamarController::class)->middleware('admin');
Route::resource('fasilitaskamars', FasilitasKamarController::class)->middleware('admin');
Route::resource('fasilitass', FasilitasController::class)->middleware('admin');
Route::resource('resepsioniss', ResepsionisController::class)->middleware('admin');
