<?php

namespace Database\Seeders;

use App\Models\Kursus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kursus::create([
            'judul' => 'Belajar Laravel',
            'deskripsi' => 'Belajar Laravel dari dasar hingga mahir',
            'durasi' => 30,
        ]);
        Kursus::create([
            'judul' => 'Belajar PHP',
            'deskripsi' => 'Belajar PHP dari dasar hingga mahir',
            'durasi' => 60,
        ]);
        Kursus::create([
            'judul' => 'Belajar Golang',
            'deskripsi' => 'Belajar Golang dari dasar hingga mahir',
            'durasi' => 60,
        ]);
    }
}
