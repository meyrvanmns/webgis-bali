<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DistrictsSeeder extends Seeder
{
    public function run(): void
    {
        $sqlPath = database_path('seeders/sql/districts.sql');

        if (!File::exists($sqlPath)) {
            $this->command->error('File districts.sql tidak ditemukan!');
            return;
        }

        $sql = File::get($sqlPath);
        // Memecah file berdasarkan titik koma (;)
        $queries = explode(';', $sql);

        $this->command->info('Memulai seeding data districts...');

        foreach ($queries as $query) {
            $cleanQuery = trim($query);
            
            // HANYA jalankan jika baris berisi perintah INSERT INTO
            if (!empty($cleanQuery) && str_starts_with(strtoupper($cleanQuery), 'INSERT INTO')) {
                try {
                    DB::statement($cleanQuery);
                } catch (\Exception $e) {
                    $this->command->error("Gagal insert data districts: " . $e->getMessage());
                }
            }
        }
        
        $this->command->info('Seeding districts selesai!');
    }
}