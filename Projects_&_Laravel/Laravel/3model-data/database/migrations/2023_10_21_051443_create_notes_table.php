<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
  /**
   * Run the migrations.
   * Información que necesita el sistema para crear la tabla
   */
  public function up(): void
  {
    // Schema es la clase que contiene todos los métodos para crear las tablas
    // Los dos puntos son métodos estaticos:
    // - create => para crear una nueva tabla
    // - table => para modificar una estructura de una tabla existente
    // - dropIfExists => eliminar una tabla si existe
    // Blueprint es una clase que contiene todos los métodos para generar una estructura de la tabla
    Schema::create('notes', function (Blueprint $table) {
      $table->id();
      // $table->tipoDeDato('nombre', cantidad máxima)->más métodos...(opcional)
      $table->string('title', 255);
      $table->string('description', 255)->nullable();
      $table->boolean('done')->default(false);
      $table->date('deadline');

      // $table->integer('example');
      // $table->unsignedInteger('example');
      // $table->bigInteger('example');
      // $table->text('example');
      // $table->float('example');
      // $table->double('example');
      // $table->enum('example', ['xtra', 'aux', '...']);

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   * Información que necesita el sistema para cancelar la migración
   */
  public function down(): void
  {
    Schema::dropIfExists('notes');
  }
};
