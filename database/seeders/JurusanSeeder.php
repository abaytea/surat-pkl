<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create([
            'name' => 'TKJ',
            'deskripsi' => 'Teknik Komputer Jaringan',
        ]);
        Jurusan::create([
            'name' => 'TKR',
            'deskripsi' => 'Teknik Kendaraan Ringan',
        ]);
        Jurusan::create([
            'name' => 'TSM',
            'deskripsi' => 'Teknik Sepeda Motor',
        ]);
        Jurusan::create([
            'name' => 'AP',
            'deskripsi' => 'Administrasi Perkantoran',
        ]);
        Jurusan::create([
            'name' => 'AK',
            'deskripsi' => 'Akuntansi',
        ]);
    }
}
