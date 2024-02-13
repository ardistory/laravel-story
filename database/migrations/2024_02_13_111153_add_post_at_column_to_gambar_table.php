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
        Schema::table('gambar', function (Blueprint $table) {
            $table->timestamp('post_at')->nullable()->after('foto_10');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gambar', function (Blueprint $table) {
            $table->dropColumn('post_at');
        });
    }
};
