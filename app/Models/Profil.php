<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    // Membuka gembok agar semua kolom di tabel ini bisa diisi
    protected $guarded = [];
}