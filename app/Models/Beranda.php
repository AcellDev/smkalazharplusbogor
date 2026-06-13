<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    use HasFactory;

    // Ini kunci biar datanya nggak ditolak sama Laravel
    protected $fillable = [
        'sub_judul',
        'judul',
        'deskripsi',
        'tahun_mengabdi',
        'siswa_aktif',
        'persentase_lulusan',
        'foto'
    ];
}