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
        Schema::table('checked', function (Blueprint $table) {
            $table->string('check_by')->nullable()->after('is_checked');

            $table->foreign('check_by')->on('users')->references('nik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('checked', function (Blueprint $table) {
            $table->dropColumn('check_by');
        });
    }
};
