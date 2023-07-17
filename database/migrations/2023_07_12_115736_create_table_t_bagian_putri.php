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
        Schema::create('t_bagian_putri', function (Blueprint $table) {
            $table->string('bagian_id')->primary();
            $table->string('nama_bagian', 45);
            $table->string('kepala_bagian', 45);
            $table->string('handphone', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_t_bagian_putri');
    }
};
