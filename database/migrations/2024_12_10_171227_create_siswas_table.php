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
            $table->string('nama_lengkap')->nullable();
            $table->string('nama_panggilan')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->string('nik')->nullable(); 
            $table->string('kk')->nullable(); 
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('akte')->nullable(); 
            $table->integer('tinggi')->nullable();
            $table->integer('berat')->nullable();
            $table->string('agama')->nullable(); 
            $table->string('Kewarganegaraan')->nullable(); 
            $table->integer('jumlah_saudara')->nullable(); 
            $table->enum('berkebutuhan_khusus',['Y','T'])->nullable(); 
            $table->string('alamat')->nullable(); 
            $table->string('jarak')->nullable(); 
            $table->string('waktu')->nullable(); 
            // Data Ayah
            $table->string('nama_ayah')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('tempat_lahir_ayah')->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('email_ayah')->nullable();
            $table->string('no_telp_ayah')->nullable();
            $table->enum('Penghasilan_ayah',['1','2','3','4','5'])->nullable();
            // Data Ibu
            $table->string('nama_ibu')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->string('tempat_lahir_ibu')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('email_ibu')->nullable();
            $table->string('no_telp_ibu')->nullable();
            $table->enum('Penghasilan_ibu',['1','2','3','4','5'])->nullable();
            // Dokumen Pendaftaran
            $table->string('file_akta_kelahiran')->nullable();
            $table->string('file_kk')->nullable(); 
            $table->string('file_foto')->nullable();
            $table->string('file_imunisasi')->nullable();
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
