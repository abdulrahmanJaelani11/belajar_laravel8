<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Siswa::factory(100)->create();

        Kelas::create([
            'kelas' => 'X',
        ]);
        Kelas::create([
            'kelas' => 'XI',
        ]);
        Kelas::create([
            'kelas' => 'XII',
        ]);

        Jurusan::create([
            'jurusan' => "Rekayasa Perangkat Lunak"
        ]);
        Jurusan::create([
            'jurusan' => "Teknik Kendaraan Ringan Otomotif"
        ]);
        Jurusan::create([
            'jurusan' => "Teknik Instalasi Tenaga Listrik"
        ]);
    }
}
