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
        Schema::create('checklist', function (Blueprint $table) {
            $table->id();
            $table->string('kode_toko')->nullable(false);
            $table->boolean('checklist_1')->nullable();
            $table->boolean('checklist_2')->nullable();
            $table->boolean('checklist_3')->nullable();
            $table->boolean('checklist_4')->nullable();
            $table->boolean('checklist_5')->nullable();
            $table->boolean('checklist_6')->nullable();
            $table->boolean('checklist_7')->nullable();
            $table->boolean('checklist_8')->nullable();
            $table->boolean('checklist_9')->nullable();
            $table->boolean('checklist_10')->nullable();
            $table->timestamps();

            $table->foreign('kode_toko')->on('tokolbk')->references('kode_toko');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checklist');
    }
};
