<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiariesContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diaries_content', function (Blueprint $table) {
            $table->increments('diarycontent_id',3);
            $table->string('diarycontent_weeksday', 55);
            $table->string('diarycontent_work', 55);
            $table->string('diarycontent_content', 55);
            $table->string('diarycontent_note', 55);
            $table->string('diarycontent_teacher_comment', 55);
            $table->string('diarycontent_traines_comment', 55);
            $table->unsignedBigInteger('week_id');
            $table->foreign('week_id')->references('week_id')->on('weeks');
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
        Schema::dropIfExists('diaries_content');
    }
}
