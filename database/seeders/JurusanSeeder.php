<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan; // <--- Posisinya harus di luar class

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jurusan::create([
            'nama' => 'Desain Komunikasi Visual',
            'singkatan' => 'DKV',
            'deskripsi' => 'Mencetak desainer kreatif yang ahli dalam ilustrasi digital, fotografi, videografi, dan branding modern.',
        ]);

        Jurusan::create([
            'nama' => 'Otomatisasi Tata Kelola Perkantoran',
            'singkatan' => 'OTKP',
            'deskripsi' => 'Mempersiapkan tenaga administrasi profesional yang cakap dalam korespondensi bisnis dan kearsipan digital.',
        ]);
    }
}   