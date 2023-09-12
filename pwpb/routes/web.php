<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testkoneksiController;


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

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/profile_pplg', function () {
    return view('profile_pplg');
});

Route::get('/test-koneksi', function () {
    return view('koneksi');
});

Route::get('/test-koneksidb', [testkoneksiController::class, 'testConnection']);
