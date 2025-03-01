<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id('car_id');
            $table->string('name');
            $table->string('registration_number')->nullable();
            $table->boolean('is_registered')->default(false);
            $table->timestamps();
        });

        Schema::create('parts', function (Blueprint $table) {
            $table->id('part_id');
            $table->string('name');
            $table->string('serialnumber');
            $table->foreignId('car_id')
                ->nullable()
                ->references('car_id')
                ->on('cars')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('parts');
        Schema::dropIfExists('cars');
    }
};