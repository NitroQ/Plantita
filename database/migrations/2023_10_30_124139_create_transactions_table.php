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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id');
            $table->string('payment_transaction_id')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('pay_method')->nullable();
            $table->string('ship_method')->nullable();
            $table->string('status')->enum('pending', 'packed', 'shipped', 'done')->default('pending');
            $table->string('subtotal')->nullable();
            $table->string('total')->nullable();
            $table->string('shipping_cost');
            $table->string('name');
            $table->string('company')->nullable();
            $table->string('street_address');
            $table->string('building_address')->nullable();
            $table->string('city');
            $table->string('zip_code');
            $table->string('phone');
            $table->string('courier')->nullable();
            $table->string('courier_location')->nullable();
            $table->string('shipping_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
