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
        Schema::create('tblpenduduk', function (Blueprint $table) {
            $table->id();
            $table->string("nik","15");
            $table->string("nama","35");
            $table->string("ttl","35");
            $table->string("jeniskelamin","10");
            $table->string("alamat","55");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblpenduduk');
    }
};
