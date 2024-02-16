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
        Schema::create('medical_prescription_medicine', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medical_prescription_id');
            $table->unsignedBigInteger('medicine_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_prescription_medicine');
    }
};
