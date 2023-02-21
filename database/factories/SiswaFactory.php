<?php

namespace Database\Factories;

use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nisn' => fake()->randomNumber(9, true),
            'no_hp' => fake()->phoneNumber(),
            'user_id' => fake()->name(),
            'kelas_id' => Kelas::all()->random()->id,
            'jurusan_id' => Jurusan::all()->random()->id,
        ];
    }
}
