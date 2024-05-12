<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function daftarTugas()
    {
        return view('daftar-tugas');
    }

    public function pengaturan()
    {
        return view('pengaturan');
    }

    public function keluar()
    {
        // Perform logout logic if needed
        return view('keluar');
    }
}
