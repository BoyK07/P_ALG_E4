<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminActionTable extends Migration
{
    public function up()
    {
        Schema::create('admin_action', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('admin_id');
            $table->string('action_type');
            $table->text('details');
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('admin_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_action');
    }
}
