<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "nama" => 'admin',
            "username"=> "admin",
            "password"=> Hash::make("admin")
        ])->assignRole('admin')->admin()->create([
            'nip' => '123',
        ]);
    }
}
