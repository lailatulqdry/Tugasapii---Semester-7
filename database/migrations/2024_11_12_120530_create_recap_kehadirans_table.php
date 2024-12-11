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
        Schema::create('recap_kehadirans', function (Blueprint $table) {
            $table->id();
            $table->string('total_hadir');
            $table->string('total_izin');
            $table->string('total_sakit');
            $table->string('total_alpha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recap_kehadirans');
    }
};
