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
        Schema::create('spurchased', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun_pembelian');
            $table->string('nama_barang');
            $table->string('kode')->unique();
            $table->string('harga_satuan');
            $table->integer('jumlah');
            $table->string('total_harga');
            $table->string('pembeli');
            $table->string('toko');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spurchased');
    }
};
