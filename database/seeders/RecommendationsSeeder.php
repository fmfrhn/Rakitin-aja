<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecommendationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void {
        $path = resource_path('seeders/rekomendasi.sql');
        $sql = file_get_contents($path);
        DB::unprepared($sql);

    }
}
