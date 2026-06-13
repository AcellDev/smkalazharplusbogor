<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    // Baris sakti untuk mengatasi Mass Assignment Exception
    // Artinya: Semua kolom boleh diisi lewat form, kecuali kolom 'id'
    protected $guarded = ['id'];
}