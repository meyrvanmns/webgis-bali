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

        // Membaca file SQL
        $sql = File::get($sqlPath);
        
        // Memisahkan setiap perintah berdasarkan tanda titik koma (;)
        $queries = explode(';', $sql);

        $this->command->info('Memulai seeding data districts...');

        foreach ($queries as $query) {
            $cleanQuery = trim($query);
            
            // HANYA jalankan jika string diawali dengan "INSERT INTO"
            // Ini akan otomatis melewati komentar (--), baris kosong, dan metadata dump
            if (!empty($cleanQuery) && str_starts_with(strtoupper($cleanQuery), 'INSERT INTO')) {
                try {
                    DB::statement($cleanQuery);
                } catch (\Exception $e) {
                    // Mencatat error jika ada masalah pada data insert tertentu
                    $this->command->error("Gagal insert pada data: " . substr($cleanQuery, 0, 50) . "...");
                }
            }
        }
        
        $this->command->info('Seeding districts selesai!');
    }
}