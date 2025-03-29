<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create a regular user (non-admin)
        User::create([
            'name' => 'Regular User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),  // Hash the password
        ]);
    }
}
