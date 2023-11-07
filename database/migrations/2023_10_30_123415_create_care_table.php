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
            $table->unsignedBigInteger('product_id');
            $table->string('care_level')->enum('Low', 'Medium', 'High');
            $table->string('care_description');
            $table->string('watering_level')->enum('Low', 'Medium', 'High');
            $table->string('watering_description');
            $table->string('sun_level')->enum('Low', 'Medium', 'High');
            $table->string('sun_description');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
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
