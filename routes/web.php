<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('landingpage');
});


Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/home', [PageController::class, 'beranda'])->name('beranda');
Route::get('/daftar-tugas', [PageController::class, 'daftarTugas'])->name('daftar-tugas');
Route::get('/pengaturan', [PageController::class, 'pengaturan'])->name('pengaturan');
Route::get('/keluar', [PageController::class, 'keluar'])->name('keluar');