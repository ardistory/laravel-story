<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('area', function (Blueprint $table) {
            $table->string('kode_toko')->nullable(false)->unique()->primary();
            $table->string('nik')->nullable(false);

            $table->foreign('kode_toko')->on('tokolbk')->references('kode_toko');
            $table->foreign('nik')->on('users')->references('nik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('area');
    }
};
