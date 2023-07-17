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
        Schema::create('t_pengeluaran_putri', function (Blueprint $table) {
            $table->string('no_bk')->primary();
            $table->date('tanggal');
            $table->date('no_reff',);
            $table->string('bagian_id', 10);
            $table->string('petugas_id', 5);
            $table->string('keterangan', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_t_pengeluaran_putri');
    }
};
