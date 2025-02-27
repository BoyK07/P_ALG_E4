<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeTable extends Migration
{
    public function up()
    {
        Schema::create('trade', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('sender_id');
            $table->foreignId('receiver_id');
            $table->string('status');
            $table->timestamps();

            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('receiver_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('trade');
    }
}
