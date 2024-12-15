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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswas')->onDelete('cascade');
            $table->enum('kategori', ['spp', 'uang_pangkal', 'seragam','buku','pendaftaran'])->default('spp');
            $table->decimal('jumlah', 10, 2);
            $table->string('bukti_pembayaran')->nullable();
            $table->enum('status', ['pending', 'paid', 'failed'])->default('pending');
            $table->date('tanggal_bayar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
