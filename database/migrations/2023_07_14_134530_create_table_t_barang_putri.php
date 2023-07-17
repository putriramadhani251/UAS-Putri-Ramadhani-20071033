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
        Schema::create('t_barang_putri', function (Blueprint $table) {
            $table->id();
            $table->string('barang_id', 45);
            $table->string('nama_barang', 45);
            $table->string('satuan', 45);
            $table->string('harga', 45);
            $table->string('kategori_id', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_t_barang_putri');
    }
};
