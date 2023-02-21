<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "nama" => 'siswa',
            "username"=> "siswa",
            "password"=> Hash::make("siswa")
        ])->assignRole('siswa')->siswa()->create([
            'nisn' => '123',
            'no_hp' => '089123123',
            'kelas_id' => 1,
            'jurusan_id' => 1
        ]);

        User::factory(10)
        ->create()
        ->each(
            function ($user) {
                Siswa::factory()->create(
                    [
                        'user_id' => $user->id,
                    ],
                );
            }
        );

    }
}
