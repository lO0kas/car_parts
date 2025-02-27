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
        Schema::create('cars', function (Blueprint $table) {
            $table->id('car_id');
            $table->string('name');
            $table->string('registration_number')->nullable();
            $table->boolean('is_registered')->default(false);
            $table->datetime('created_at')->useCurrent();
            $table->datetime('updated_at')->useCurrentOnUpdate();
        });

        Schema::create('parts', function (Blueprint $table) {
            $table->id('part_id');
            $table->string('name');
            $table->string('serialnumber');
            $table->foreignId('car_id')
                ->references('car_id')
                ->on('cars')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
            $table->datetime('created_at')->useCurrent();
            $table->datetime('updated_at')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
        Schema::dropIfExists('parts');
    }
};
