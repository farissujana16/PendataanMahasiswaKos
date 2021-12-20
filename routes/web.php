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
//     return view('login');
// });
//
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
//
// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });
//
// Route::get('/tambah', function () {
//     return view('tambah');
// });
//
// Route::get('/kos/anggota', function () {
//     return view('anggota');
// });

Route::get('/dashboard', 'KosController@index');
Route::get('/tambah', 'KosController@show');
Route::post('/dashboard', 'KosController@store');
Route::delete('/dashboard', 'KosController@destroy');
Route::get('/kos/anggota/{id_kos}', 'AnggotaController@create');
Route::post('/mahasiswa', 'AnggotaController@store');
Route::get('/mahasiswa', 'AnggotaController@show');
Route::post('/search', 'AnggotaController@search');
Route::get('/search', 'AnggotaController@hasil');
Route::delete('/mahasiswa', 'AnggotaController@destroy');
Route::get('/kos', 'KosController@data');
Route::post('/cari', 'KosController@search');
Route::get('/cari', 'KosController@hasil');
Route::get('/kartu/{id_kartu}', 'Controller@tampil');
Route::get('/', 'LoginController@index');
Route::post('/dashboard', 'LoginController@store');
