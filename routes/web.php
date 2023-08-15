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

Route::get('/', function () {
    return view('Dashboard');
});

Route::get('/Dashboard', function () {
    return view('Dashboard');
});

Route::get('/Guru', function () {
    return view('Guru');
});

Route::get('/Siswa', function () {
    return view('Siswa');
});

Route::get('/kelas', function () {
    return view('kelas');
});

Route::get('/KBM', function () {
    return view('KBM');
});


Route::get('/profil', function () {
    return view('profil');
});

Route::get('/Mata-Pelajaran', function () {
    return view('Mata-Pelajaran');
});

Route::get('/Jadwal-Pelajaran', function () {
    return view('Jadwal-Pelajaran');
});

Route::get('/Tahun-Akademik', function () {
    return view('Tahun-Akademik');
});

Route::get('/Pelaksanaan-KBM', function () {
    return view('Pelaksanaan-KBM');
});

Route::get('/Siswa-Dropout', function () {
    return view('Siswa-Dropout');
});

Route::get('/Siswa-Lulus', function () {
    return view('Siswa-Lulus');
});

Route::get('/Profil-Guru', function () {
    return view('Profil-Guru');
});

Route::get('/Profil-Siswa', function () {
    return view('Profil-Siswa');
});

Route::get('/Ampu-Mapel', function () {
    return view('Ampu-Mapel');
});

Route::get('/Tetapkan-Mapel', function () {
    return view('Tetapkan-Mapel');
});
