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
        Schema::create('care', function (Blueprint $table) {
            $table->id();
            $table->integer('product')->unsigned();
            $table->integer('care_level')->enum('1', '2', '3');
            $table->string('care_description');
            $table->string('watering_level')->enum('1', '2', '3');
            $table->string('watering_description');
            $table->string('sun_level')->enum('1', '2', '3');
            $table->string('sun_description');
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
        Schema::dropIfExists('care');
    }
};
