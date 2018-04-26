<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cashdetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashrecord', function (Blueprint $table) {
            $table->increments('id');
            $table->string('membershipid', 255)->nullable();
            $table->string('bank_name', 255)->nullable();
            $table->string('card_type', 255)->nullable();
            $table->string('card_holder_name', 255)->nullable();
            $table->string('card_amount', 255)->nullable();
            $table->string('card_number_digits', 255)->nullable();
            $table->string('cash_amount', 255)->nullable();
            $table->string('online_amount', 255)->nullable();
            $table->string('cash_card_amount', 255)->nullable();
            $table->string('cheque_holder_name', 255)->nullable();
            $table->string('cheque_number_digits', 255)->nullable();
            $table->string('cheque_amount', 255)->nullable();
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
        Schema::dropIfExists('cashrecord');
    }
}
