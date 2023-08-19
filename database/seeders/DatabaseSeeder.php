<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UserSeeder::class);
        \App\Models\User::factory(20)->create();
        \App\Models\User::factory()->create([
            'name' => 'Demo',
            'email' => 'demot@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
