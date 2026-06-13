<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BerandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Beranda::create([
        'judul' => 'Selamat Datang di Al-Azhar',
        'sub_judul' => 'Membentuk Generasi Beradab dan Cerdas',
        'deskripsi' => 'Selamat datang di official website Al-Azhar. Kami berkomitmen untuk memberikan pe...',
        'foto_banner' => 'banner.jpg',
    ]); // <--- Tambahkan penutup ini di sini
}}