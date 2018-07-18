<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('receiver_name',50);
            $table->string('receiver_phone_number',13);
            $table->string('receiver_email',150);
            $table->string('receiver_address',255);
            $table->integer('user_id');
            $table->float('amount');
            $table->string('service_name',50);
            $table->string('payment',255);
            $table->text('payment_info');
            $table->string('security',255);
            $table->dateTime('receiver_date');
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
        Schema::dropIfExists('oders');
    }
}
