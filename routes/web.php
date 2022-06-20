<?php

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
Route::get('/conn', function () {
    return view('konek');
});
Route::get('/dosen', 'DosenController@dosen');
Route::get('/dosen/cari', 'DosenController@search');
Route::get('/mahasiswa', 'MahasiswaController@mahasiswa');
Route::get('/mahasiswa/cari', 'MahasiswaController@search');
Route::get('/mahasiswa/formulirmhs', 'MahasiswaController@formulirmhs');
Route::post('/mahasiswa/simpanmhs', 'MahasiswaController@simpanmhs');
Route::get('/mahasiswa/editmhs/{id}', 'MahasiswaController@editmhs');
Route::put('/mahasiswa/updatemhs/{id}', 'MahasiswaController@updatemhs');
Route::get('/mahasiswa/hapusmhs/{id}', 'MahasiswaController@hapusmhs');
Route::get('/user', 'AuthController@user');
Route::get('/user/formuliruser', 'AuthController@formuliruser');
Route::post('/user/simpanuser', 'AuthController@simpanuser');
Route::get('/login', 'AuthController@login');
Route::post('/user/ceklogin', 'AuthController@ceklogin');
Route::get('/logout', 'AuthController@logout');