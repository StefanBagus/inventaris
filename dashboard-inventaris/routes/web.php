<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogistikSubbidtekkomController;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/subbidtekkom', [LogistikSubbidtekkomController::class, 'index']);


Route::get('/subbagrenmin', function () {
    return view('pages.subbagrenmin');
});

Route::get('/subbidtekinfo', function () {
    return view('pages.subbidtekinfo');
});

