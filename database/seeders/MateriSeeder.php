<?php

namespace Database\Seeders;

use App\Models\Materi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materi::create([
            'kursus_id' => 1,
            'judul' => 'Intro',
            'deskripsi' => 'intro',
            'video' => 'https://www.youtube.com/embed/T1TR-RGf2Pw?si=wJ6sr0-QZvgPceeF',
        ]);
        Materi::create([
            'kursus_id' => 1,
            'judul' => 'Setup PHP',
            'deskripsi' => 'Setup PHP',
            'video' => 'https://www.youtube.com/embed/bVsyHTDANNY?si=Qb34VDrqdQsuciAO',
        ]);
        Materi::create([
            'kursus_id' => 2,
            'judul' => 'Intro',
            'deskripsi' => 'Intro',
            'video' => 'https://www.youtube.com/embed/l1W2OwV5rgY?si=SCVs8Fg1vrhzHgtF',
        ]);
        Materi::create([
            'kursus_id' => 2,
            'judul' => 'SEJARAH & KARAKTERISTIK PHP',
            'deskripsi' => 'SEJARAH & KARAKTERISTIK PHP',
            'video' => 'https://www.youtube.com/embed/q3NVC5JxgVI?si=ZTVbMZyjGa14wxTc',
        ]);
    }
}
