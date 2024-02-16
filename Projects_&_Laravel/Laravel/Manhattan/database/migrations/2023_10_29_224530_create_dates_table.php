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
        Schema::create('dates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_user_id');
            $table->unsignedBigInteger('patient_user_id');
            $table->date('date');
            $table->time('time');
            $table->string('link')->nullable();
            $table->string('status')->default('pending');
            $table->string('motive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dates');
    }
};
