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
        Schema::create('cocktails', function (Blueprint $table) {
            $table->id();

            $table->string('name', 50);
            $table->string('main_alcohol', 50);
            $table->text('ingredients')->nullable();
            $table->text('preparations')->nullable();
            $table->string('glass_type', 50)->nullable();
            $table->decimal('price', 6, 2)->nullable();
            $table->string('garnish', 50)->nullable();
            $table->string('iba_status', 50)->nullable();
            $table->string('origin', 50)->nullable();
            $table->string('serving_temperature', 10)->nullable();
            $table->decimal('alcohol_content', 3, 2)->nullable();
            $table->string('flavour_profile', 30)->nullable();
            $table->string('type', 50)->nullable();
            $table->string('creation_date', 50)->nullable();
            $table->string('creator', 50)->nullable();
            $table->text('history')->nullable();
            $table->text('nutritional_values')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktails');
    }
};
