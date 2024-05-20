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
        Schema::create('tbllayananpublik', function (Blueprint $table) {
            $table->id();
            $table->string('namalayanan','40');
            $table->longtext('deskripsi');
            $table->string('jamkerja','15');
            $table->string('lokasipelayanan','55');
            $table->string('kontaklayanan','15');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbllayananpublik');
    }
};
