<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RegencySeeder extends Seeder
{
    public function run(): void
    {
        $sqlPath = database_path('seeders/sql/regencies.sql');

        if (!File::exists($sqlPath)) {
            $this->command->error('File regencies.sql tidak ditemukan');
            return;
        }

        // Membaca file SQL baris demi baris agar tidak overload
        $sql = File::get($sqlPath);
        
        // Memisahkan setiap perintah INSERT (berdasarkan tanda titik koma)
        $queries = explode(';', $sql);

        $this->command->info('Memulai seeding data regencies...');

        foreach ($queries as $query) {
            $cleanQuery = trim($query);
            if (!empty($cleanQuery)) {
                try {
                    DB::statement($cleanQuery);
                } catch (\Exception $e) {
                    $this->command->error("Gagal insert: " . substr($cleanQuery, 0, 50) . "...");
                }
            }
        }
        
        $this->command->info('Seeding selesai!');
    }
}