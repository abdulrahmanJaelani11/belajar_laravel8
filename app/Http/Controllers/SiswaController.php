<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('beranda', ['judul' => 'Beranda']);
    }

    public function detail(Siswa $siswa)
    {
        $data = [
            'judul' => "Data Siswa",
            'siswa' => $siswa
        ];
        return view('detail', $data);
    }
}
