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
            $table->id('id_car');
            $table->string('name_car')->nullable();
            $table->string('detail_car')->nullable();
            $table->integer('price_car')->nullable();

            $table->string('img_car')->nullable();
            $table->string('car_user_by')->nullable();
            

            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
