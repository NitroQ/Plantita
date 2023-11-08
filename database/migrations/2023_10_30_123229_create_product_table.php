<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('category');
            $table->string('scientific_name');
            $table->string('quantity');
            $table->string('price');
            $table->string('description');
            $table->string('lifespan');
            $table->string('care_level')->enum('Low', 'Medium', 'High')->nullable();
            $table->string('care_description')->nullable();
            $table->string('watering_level')->enum('Low', 'Medium', 'High')->nullable();
            $table->string('watering_description')->nullable();
            $table->string('sun_level')->enum('Low', 'Medium', 'High')->nullable();
            $table->string('sun_description')->nullable();
            $table->string('status')->default('active');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
