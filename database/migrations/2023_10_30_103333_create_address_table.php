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
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->integer('user')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company')->nullable();
            $table->string('street_address');
            $table->string('building_address')->nullable();
            $table->string('city');
            $table->string('phone');
            $table->boolean('default')->default(true);
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
        Schema::dropIfExists('address');
    }
};
