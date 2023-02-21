<?php

namespace Database\Seeders;

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
        $this->call([
            AuthSeeder::class,
            AdminSeeder::class,
            KelasSeeder::class,
            JurusanSeeder::class,
            SiswaSeeder::class
        ]);
    }
}
