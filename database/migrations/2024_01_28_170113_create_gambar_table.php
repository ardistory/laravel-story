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
        Schema::create('gambar', function (Blueprint $table) {
            $table->id();
            $table->string('kode_toko')->unique()->nullable(false);
            $table->string('foto_1')->nullable(true);
            $table->string('foto_2')->nullable(true);
            $table->string('foto_3')->nullable(true);
            $table->string('foto_4')->nullable(true);
            $table->string('foto_5')->nullable(true);
            $table->string('foto_6')->nullable(true);
            $table->string('foto_7')->nullable(true);
            $table->string('foto_8')->nullable(true);
            $table->string('foto_9')->nullable(true);
            $table->string('foto_10')->nullable(true);
            $table->timestamps();

            $table->foreign('kode_toko')->on('tokolbk')->references('kode_toko');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar');
    }
};
