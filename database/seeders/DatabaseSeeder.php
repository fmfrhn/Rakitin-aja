<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\QuestionCategory;
use App\Models\Answer;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RecommendationsSeeder::class);
        $this->command->info('Master data jenis kendaraan has been seeded!');
    }
}
