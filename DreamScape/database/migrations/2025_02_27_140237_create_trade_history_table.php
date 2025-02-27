<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeHistoryTable extends Migration
{
    public function up()
    {
        Schema::create('trade_history', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('trade_id');
            $table->string('action');
            $table->timestamp('timestamp');

            $table->foreign('trade_id')->references('id')->on('trade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('trade_history');
    }
}
