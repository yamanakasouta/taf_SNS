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
        Schema::create('practices', function (Blueprint $table) {
            $table->id();
            $table->date('practice_day')->comment('練習日');
            $table->string('practice_temperature')->comment('気温');
            $table->string('practice_humidity')->comment('湿度');
            $table->string('practice_menu')->comment('練習メニュー');
            $table->text('practice_memo')->nullable()->comment('メモ');
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
        Schema::dropIfExists('practices');
    }
};
