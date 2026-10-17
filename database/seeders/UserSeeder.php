<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Piyak Admin',
            'email' => 'piyak@example.com',
            'password' => Hash::make('password123'), // Password wajib di-hash![cite: 111]
            'role' => 'admin',
        ]);
    }
}