<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testkoneksiController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\Controllers;

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
    return view('welcome');
});

// Route::get('/index/siswa', 'siswaController@index');

Route::resource('siswa', siswaController::class);

Route::get('/test-koneksi', function () {
    return view('koneksi');
});

// Route::get('/test-koneksidb', [testkoneksiController::class, 'testConnection']);
