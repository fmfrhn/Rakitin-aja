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
        // User::factory(10)->create();

        //seeder kategori
        QuestionCategory::create([
            'nama_kategori' => 'Gaming'
        ]);

        QuestionCategory::create([
            'nama_kategori' => 'Multimedia'
        ]);

        QuestionCategory::create([
            'nama_kategori' => 'Office'
        ]);
        //seeder kategori


        //seeder pertanyaan
        Question::create([
            'kategori_id' => '1',
            'pertanyaan' => 'Jenis PC Gaming apakah yang ingin anda buat ?'
        ]);
        Question::create([
            'kategori_id' => '1',
            'pertanyaan' => 'Jenis game apa yang paling sering Anda mainkan? ?'
        ]);
        Question::create([
            'kategori_id' => '1',
            'pertanyaan' => 'Seberapa penting kualitas grafis dalam pengalaman bermain Anda? ?'
        ]);
        Question::create([
            'kategori_id' => '1',
            'pertanyaan' => 'Berapa besar resolusi monitor yang Anda gunakan atau ingin gunakan ?'
        ]);
        Question::create([
            'kategori_id' => '1',
            'pertanyaan' => 'Berapa frame rate (FPS) yang Anda targetkan saat bermain game ?'
        ]);
        Question::create([
            'kategori_id' => '1',
            'pertanyaan' => 'Apakah Anda juga akan melakukan streaming game ?'
        ]);
        Question::create([
            'kategori_id' => '1',
            'pertanyaan' => 'Berapa besar kapasitas penyimpanan yang Anda butuhkan ?'
        ]);
        Question::create([
            'kategori_id' => '1',
            'pertanyaan' => 'Bagaimana suhu ruangan tempat anda menyimpan komputer ?'
        ]);


        Question::create([
            'kategori_id' => '2',
            'pertanyaan' => 'Seperti apa jenis multimedia yang akan Anda gunakan ?'
        ]);
        Question::create([
            'kategori_id' => '2',
            'pertanyaan' => 'Seberapa sering Anda akan menggunakan aplikasi multimedia tersebut ?'
        ]);
        Question::create([
            'kategori_id' => '2',
            'pertanyaan' => 'Apakah Anda membutuhkan layar tambahan atau monitor ganda ?'
        ]);
        Question::create([
            'kategori_id' => '2',
            'pertanyaan' => 'Seberapa penting kecepatan rendering bagi Anda ?'
        ]);
        Question::create([
            'kategori_id' => '2',
            'pertanyaan' => 'Apakah Anda akan menggunakan software tertentu yang memerlukan spesifikasi khusus ?'
        ]);
        Question::create([
            'kategori_id' => '2',
            'pertanyaan' => 'Berapa besar kapasitas penyimpanan yang Anda butuhkan ?'
        ]);
        Question::create([
            'kategori_id' => '2',
            'pertanyaan' => 'Seberapa penting kinerja grafis bagi Anda ?'
        ]);
        //seeder pertanyaan

        //seeder jawaban
    }
}
