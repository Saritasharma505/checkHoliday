<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gname');
            $table->string('giftemail')->unique();
            $table->bigInteger('mobno');
            $table->text('address');
            $table->string('location');
            $table->string('vcode');
            $table->date('dog');
            $table->date('edate');
            $table->string('dsaName');
            $table->string('dsaId');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
}
