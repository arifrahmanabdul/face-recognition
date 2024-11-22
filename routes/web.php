<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix'=>'admin'],function(){
    Route::get('/',[\App\Http\Controllers\DashboardController::class,'index'])->name('admin');

    Route::resource('/absensi',\App\Http\Controllers\AbsensiController::class);

    Route::resource('/jabatan',\App\Http\Controllers\JabatanController::class);

    Route::resource('/laporan',\App\Http\Controllers\LaporanController::class);

    Route::resource('/karyawan',\App\Http\Controllers\KaryawanController::class);
});