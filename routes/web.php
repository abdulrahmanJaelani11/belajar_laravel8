<?php

use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\page;
use App\Http\Controllers\Siswa as ControllersSiswa;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SiswaMainController;
use App\Http\Controllers\UserController;
use App\Models\siswa;
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

Route::get('/', [SiswaController::class, 'index'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'prosesLogin']);
Route::post('/logout', [UserController::class, 'prosesLogout']);
Route::get('/daftar', [UserController::class, 'index'])->middleware('guest');
Route::post('/daftar', [UserController::class, 'prosesDaftar']);
Route::get('/detail/{siswa}', [SiswaController::class, 'detail'])->middleware('auth');
Route::get('/kelas/{kelas:kelas}', [KelasController::class, 'index'])->middleware('auth');
Route::get('/jurusan/{jurusan:jurusan}', [JurusanController::class, 'index'])->middleware('auth');
Route::resource('/main/siswa', SiswaMainController::class)->middleware('auth');
Route::resource('/data/kelas', KelasController::class)->middleware('auth');
Route::resource('/data/jurusan', JurusanController::class)->middleware('auth');
