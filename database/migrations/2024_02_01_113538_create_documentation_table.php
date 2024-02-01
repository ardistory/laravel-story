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
        Schema::create('documentation', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->text('description')->nullable(true);
            $table->string('picture')->nullable(false);
            $table->string('post_by')->nullable(false);
            $table->timestamps();

            $table->foreign('post_by')->on('users')->references('nik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentation');
    }
};
