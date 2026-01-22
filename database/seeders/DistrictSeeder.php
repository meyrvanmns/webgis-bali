<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('districts')->insert([
            [
                'regency_id' => 1,
                'name' => 'Denpasar Barat',
                'alt_name' => 'West Denpasar',
                'latitude' => -8.6716,
                'longitude' => 115.2056,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'regency_id' => 1,
                'name' => 'Denpasar Timur',
                'alt_name' => 'East Denpasar',
                'latitude' => -8.6575,
                'longitude' => 115.2406,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
