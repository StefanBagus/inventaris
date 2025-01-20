<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogistikSubbidtekkomController;
use App\Http\Controllers\AuthController;

// Redirect root URL ke login page jika belum login, ke home jika sudah login
Route::get('/', function () {
    if (session()->has('user')) {
        return redirect('/home');
    }
    return redirect('/login');
});

// Halaman login dan otentikasi - hanya bisa diakses jika belum login
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Route logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman yang membutuhkan autentikasi
Route::middleware('checkSession')->group(function () {
    Route::get('/home', function () {
        return view('pages.home');
    })->name('home');

    Route::get('/subbidtekkom', [LogistikSubbidtekkomController::class, 'index'])->name('subbidtekkom');
    Route::get('/subbagrenmin', function () {
        return view('pages.subbagrenmin');
    })->name('subbagrenmin');
    Route::get('/subbidtekinfo', function () {
        return view('pages.subbidtekinfo');
    })->name('subbidtekinfo');

    Route::get('/user', function () {
        return view('pages.user');
    })->name('user.index');
});