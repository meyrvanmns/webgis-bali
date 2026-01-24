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
            $this->command->error('File districts.sql tidak ditemukan');
            return;
        }

        $sql = File::get($sqlPath);
        // Memecah file berdasarkan tanda titik koma (;)
        $queries = explode(';', $sql);

        $this->command->info('Memulai seeding data districts...');

        foreach ($queries as $query) {
            $cleanQuery = trim($query);
            
            // HANYA jalankan jika string diawali dengan "INSERT INTO"
            // Ini akan melewati baris komentar seperti -- Database: db_projectsig
            if (!empty($cleanQuery) && str_starts_with(strtoupper($cleanQuery), 'INSERT INTO')) {
                try {
                    DB::statement($cleanQuery);
                } catch (\Exception $e) {
                    $this->command->error("Gagal insert data: " . substr($cleanQuery, 0, 50) . "...");
                }
            }
        }
        
        $this->command->info('Seeding districts selesai!');
    }
}