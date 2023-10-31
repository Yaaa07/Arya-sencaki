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
        Schema::create('siswa', function (Blueprint $table) {
                $table->id();
                $table->string('nama' , 100);
                $table->string('jenis_kelamin', 1);
                $table->string('NIS' , 20)->unique;
                $table->string('tempat_lahir' , 100);
                $table->string('alamat');
                $table->string('no_telp' , 100);
                $table->date('tanggal_lahir' , 100);
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
