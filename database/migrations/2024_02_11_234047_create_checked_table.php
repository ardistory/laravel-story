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
        Schema::create('checked', function (Blueprint $table) {
            $table->id();
            $table->string('kode_toko');
            $table->boolean('is_checked');
            $table->timestamps();

            $table->foreign('kode_toko')->on('tokolbk')->references('kode_toko');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checked');
    }
};
