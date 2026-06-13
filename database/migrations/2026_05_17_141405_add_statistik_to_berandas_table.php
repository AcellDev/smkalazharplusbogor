<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('berandas', function (Blueprint $table) {
            // Menambahkan 3 kolom angka (integer) untuk statistik
            $table->integer('tahun_mengabdi')->default(15)->after('deskripsi');
            $table->integer('siswa_aktif')->default(200)->after('tahun_mengabdi');
            $table->integer('persentase_lulusan')->default(98)->after('siswa_aktif');
        });
    }

    public function down(): void
    {
        Schema::table('berandas', function (Blueprint $table) {
            $table->dropColumn(['tahun_mengabdi', 'siswa_aktif', 'persentase_lulusan']);
        });
    }
};