<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(1000)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'role' => 'admin',
            'email' => 'admin@example.com',
            'thumb' => null,
            'password' => Hash::make('password'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Petugas',
            'role' => 'teacher',
            'email' => 'teacher@example.com',
            'thumb' => null,
            'password' => Hash::make('password'),
        ]);
    }
}
