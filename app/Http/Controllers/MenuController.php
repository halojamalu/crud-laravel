<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function beranda() {
        return view('beranda');
    }
    public function informasi() {
        return view('informasi');
    }
    public function data_siswa() {
        return view('siswa');
    }
}
