<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the UserSeeder to create the regular user
        $this->call(UserSeeder::class);

        // You can also add more seeders if necessary. For example:
        // $this->call(OtherSeeder::class);
    }
}
