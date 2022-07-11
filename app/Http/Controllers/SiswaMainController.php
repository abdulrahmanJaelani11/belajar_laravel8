<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'judul' => "Data Siswa",
            'siswa' => Siswa::with(['jurusan', 'kelas'])->latest()->get()
        ];
        return view('index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'judul' => "Tambah Siswa Siswa",
            'kelas' => Kelas::all(),
            'jurusan' => Jurusan::all()
        ];
        return view('tambahSiswa', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        $dataSiswa = $request->validate([
            'nama' => 'required',
            'kelas_id' => 'required',
            'jurusan_id' => 'required'
        ]);
        Siswa::create($dataSiswa);

        return redirect(url('/main/siswa'))->with('sukses', 'Berhasil Menambahkan data Siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return view('detail', [
            'judul' => 'Detail Siswa',
            'siswa' => $siswa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        $data = [
            'judul' => "Edit Siswa",
            'data' => $siswa,
            'kelas' => Kelas::all(),
            'jurusan' => Jurusan::all()
        ];
        return view('editSiswa', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $dataSiswa = $request->validate([
            'nama' => 'required',
            'kelas_id' => 'required',
            'jurusan_id' => 'required'
        ]);

        Siswa::where('id', $siswa->id)->update($dataSiswa);
        return redirect(url('/main/siswa'))->with('sukses', 'Berhasil Mengubah data Siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        // return $siswa;
        Siswa::destroy($siswa->id);

        return redirect(url('main/siswa'))->with('sukses', 'Berhasil Menghapus Siswa');
    }
}
