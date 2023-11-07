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
            $table->string('maya_transaction_id')->nullable();
            $table->string('maya_status')->nullable();
            $table->string('pay_method')->enum('credit-card', 'debit-card', 'e-wallet');
            $table->string('ship_method')->enum('same-day', 'pick-up', 'standard');
            $table->string('status')->enum('pending', 'packed', 'shipped', 'done');
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
