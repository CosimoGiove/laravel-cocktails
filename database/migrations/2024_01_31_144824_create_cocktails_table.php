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
            $table->text('ingredients');
            $table->text('preparations');
            $table->string('glass_type', 50);
            $table->decimal('price', 6, 2);
            $table->string('garnish', 50);
            $table->string('iba_status', 50);
            $table->string('origin', 50);
            $table->string('serving_temperature', 10);
            $table->decimal('alcohol_content', 3, 2);
            $table->string('flavour_profile', 30);
            $table->string('type', 50);
            $table->string('creation_date', 50);
            $table->string('creator', 50);
            $table->text('history');
            $table->text('nutritional_values');



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
