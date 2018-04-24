<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberpaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberpayments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('txnID');
            $table->string('memberShipid');
            $table->string('mode_of_payment');
            $table->string('initial_payment');
            $table->string('payDate');
            $table->string('m_name');
            $table->string('dsa_name');
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
        Schema::dropIfExists('memberpayments');
    }
}
