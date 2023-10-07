<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practice_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->date('day');
            $table->double('temperature','3','1');
            $table->double('humidity','3','1');
            $table->string('practice_menu');
            $table->text('memo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practice_menu');
    }
};
