<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagicalEffectsTable extends Migration
{
    public function up()
    {
        Schema::create('magical_effects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('effect_name');
            $table->text('effect_description');
        });
    }

    public function down()
    {
        Schema::dropIfExists('magical_effects');
    }
}
