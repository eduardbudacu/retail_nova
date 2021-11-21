<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecieptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reciepts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->foreignId('user_id');
            $table->foreignId('pos_id');
            $table->integer('reciept_number');
            $table->date('date');
            $table->dateTime('datetime');
            $table->float('total');
            $table->boolean('closed')->default(FALSE);
            $table->foreignId('economic_day_id');
            $table->float('discount')->default(0);
            $table->boolean('advance_payment')->default(FALSE);
            $table->float('advance_payment_amount')->default(0);
            $table->boolean('paid')->default(TRUE);
            $table->foreignId('employee_id');
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
        Schema::dropIfExists('reciepts');
    }
}
