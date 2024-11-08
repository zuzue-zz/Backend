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
        Schema::table('movies', function (Blueprint $table) {
            $table->text('review')->nullable()->after('rating');
            $table->string('trailer_link')->after('review')->nullable();
            $table->string('image_path')->nullable()->after('trailer_link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('review');
            $table->dropColumn('trailer_link');
            $table->dropColumn('image_path');
        });
    }
};
