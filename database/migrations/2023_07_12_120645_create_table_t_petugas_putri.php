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
        Schema::create('t_petugas_putri', function (Blueprint $table) {
            $table->string('petugas_id')->primary();
            $table->string('nama_petugas', 35);
            $table->string('alamat', 45);
            $table->string('hanphone', 15);
            $table->string('password', 10);
            $table->string('level', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_t_petugas_putri');
    }
};
