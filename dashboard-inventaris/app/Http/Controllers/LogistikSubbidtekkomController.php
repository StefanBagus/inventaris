<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogistikSubbidtekkom;

class LogistikSubbidtekkomController extends Controller
{
    public function index()
    {
        $data = LogistikSubbidtekkom::all(); // Ambil semua data dari tabel
        return view('pages.subbidtekkom', compact('data'));

    }
}
