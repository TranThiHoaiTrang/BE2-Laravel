<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeks', function (Blueprint $table) {
            $table->increments('week_id',3);
            $table->string('week_weeksday', 55);
            $table->string('status_check', 55);
            // $table->integer('create_at', 55);
            // $table->integer('end_at', 55);
            $table->unsignedBigInteger('diary_id');
            $table->foreign('diary_id')->references('diary_id')->on('diaries');
            // $table->integer('status',5);
            // $table->softDeletesTz($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('weeks');
    }
}
