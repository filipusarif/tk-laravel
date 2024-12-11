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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']); 
            $table->string('alamat');
            $table->string('no_kk')->nullable(); 
            // Data Ayah
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('no_telp_ayah')->nullable();
            // Data Ibu
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('no_telp_ibu')->nullable();
            // Dokumen Pendaftaran
            $table->string('file_akta_kelahiran')->nullable();
            $table->string('file_kk')->nullable(); 
            $table->string('file_foto')->nullable();
            // Status dan Metadata
            $table->enum('status_verifikasi', ['pending', 'verified', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
