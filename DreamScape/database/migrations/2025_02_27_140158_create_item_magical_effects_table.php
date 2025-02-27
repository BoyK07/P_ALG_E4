<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemMagicalEffectsTable extends Migration
{
    public function up()
    {
        Schema::create('item_magical_effects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('item_id');
            $table->unsignedInteger('magical_effect_id');

            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('magical_effect_id')->references('id')->on('magical_effects')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('item_magical_effects');
    }
}
