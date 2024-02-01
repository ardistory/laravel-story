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
        Schema::create('tokolbk', function (Blueprint $table) {
            $table->string('kode_toko', 4)->primary();
            $table->string('nama_toko', 100);
            $table->string('ip_gateway', 100);
            $table->string('ip_induk', 100);
            $table->string('ip_anak', 100);
            $table->string('ip_stb', 100);
            $table->string('ip_wdcp', 100);
            $table->string('edparea');

            $table->foreign('edparea')->on('users')->references('nik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokolbk');
    }
};
