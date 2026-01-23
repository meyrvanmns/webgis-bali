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

        DB::statement(File::get($sqlPath));
    }
}
