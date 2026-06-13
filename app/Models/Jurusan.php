<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    // Surat izin sakti biar data bisa disimpan dan di-update sekaligus
    protected $guarded = [];
}