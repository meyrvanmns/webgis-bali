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
        Schema::create('regencies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('alt_name')->default('');
            $table->double('latitude')->default(0)->nullable(false);
            $table->double('longitude')->default(0)->nullable(false);
            $table->decimal('luas')->default(0)->nullable(false);
            $table->bigInteger('populasi')->default(0)->nullable(false);
            $table->bigInteger('kepadatan')->default(0)->nullable(false);
            $table->decimal('ipm')->default(0)->nullable(false);
            $table->Integer('pariwisata')->default(0)->nullable(false);
            $table->bigInteger('pdrb')->default(0)->nullable(false);
            $table->bigInteger('pengangguran')->default(0)->nullable(false);
            $table->bigInteger('kemiskinan')->default(0)->nullable(false);
            $table->enum('type_polygon', ['Polygon', 'MultiPolygon'])->default('Polygon');
            $table->longText('polygon')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regencies');
    }
};
