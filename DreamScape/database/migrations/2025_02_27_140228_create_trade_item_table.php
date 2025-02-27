<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeItemTable extends Migration
{
    public function up()
    {
        Schema::create('trade_item', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('trade_id');
            $table->unsignedInteger('item_id');
            $table->integer('quantity');

            $table->foreign('trade_id')->references('id')->on('trade')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('trade_item');
    }
}
