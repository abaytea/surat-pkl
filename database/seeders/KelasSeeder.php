<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            "kelas" => 'A'
        ]);
        Kelas::create([
            "kelas" => 'B'
        ]);
        Kelas::create([
            "kelas" => 'C'
        ]);
        Kelas::create([
            "kelas" => 'D'
        ]);
    }
}
