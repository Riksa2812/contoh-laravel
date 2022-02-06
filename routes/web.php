<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenjualanTransaksi;

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
    return redirect('/login');
});

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/login',[LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::prefix('')->middleware('auth')->group(function () {
    Route::resource('/barang', BarangController::class);
    Route::resource('/penjualan',PenjualanTransaksi::class);
});
 
