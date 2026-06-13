<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
  Schema::create('berandas', function (Blueprint $table) {
            $table->id();
            
            // Tambahkan baris di bawah ini:
            $table->string('judul'); 
            $table->string('sub_judul')->nullable(); 
            $table->text('deskripsi')->nullable(); 
            $table->string('foto_banner')->nullable(); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berandas');
    }
};

