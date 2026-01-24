<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (Schema::hasTable('users')) {
            User::firstOrCreate(
                ['email' => 'test@example.com'],
                [
                    'name' => 'Admin',
                    'password' => bcrypt('password'),
                ]
            );
        }

        $this->call([
            RegencySeeder::class,
            DistrictsSeeder::class,
        ]);
    }
}
