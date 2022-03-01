<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\TipeKamarController;
use App\Http\Controllers\FasilitasKamarController;


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
    return view('user.home');
});

Route::get('/book', function () {
    return view('user.pesan');
});
Route::get('/home', function () {
    return view('user.home');
});
Route::get('/login', function () {
    return view('login');
});

Route::resource('tipekamars', TipeKamarController::class);
Route::resource('fasilitaskamars', FasilitasKamarController::class);
Route::resource('fasilitass', FasilitasController::class);
Route::resource('resepsioniss', ResepsionisController::class);
