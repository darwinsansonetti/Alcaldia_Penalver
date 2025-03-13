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
        Schema::create('contratacion', function (Blueprint $table) {
            
            $table->id();
            $table->string('llamado', 255);
            $table->text('title'); 
            $table->text('condiciones'); 
            $table->text('aclaratorias'); 
            $table->text('recepcion'); 
            $table->integer('activo')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratacion');
    }
};
