<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SiswaController;
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

Route::get('/', function () {
    return view('auths.login');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/login', [AuthController::class, 'login']);
Route::post('/postlogin', [AuthController::class, 'postlogin']);

Route::get('/siswa', [SiswaController::class, 'index']);
Route::post('/siswa/create', [SiswaController::class, 'create']);
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit']);
Route::post('/siswa/{id}/update', [SiswaController::class, 'update']);
Route::get('/siswa/{id}/delete', [SiswaController::class, 'delete']);

Route::get('/dosen', [DosenController::class, 'index']);
Route::post('/dosen/create', [DosenController::class, 'create']);
Route::get('/dosen/{id}/edit', [DosenController::class, 'edit']);
Route::post('/dosen/{id}/update', [DosenController::class, 'update']);
Route::get('/dosen/{id}/delete', [DosenController::class, 'delete']);

Route::get('/prodi', [ProdiController::class, 'index']);
Route::post('/prodi/create', [ProdiController::class, 'create']);
Route::get('/prodi/{id}/edit', [ProdiController::class, 'edit']);
Route::post('/prodi/{id}/update', [ProdiController::class, 'update']);
Route::get('/prodi/{id}/delete', [ProdiController::class, 'delete']);



// Route::get('/', 'SiswaController@index');
