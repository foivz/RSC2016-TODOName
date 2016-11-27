<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizTable extends Migration
{
    public function up()
    {
        Schema::create('quiz_questions', function(Blueprint $table)
        {
            $table->increments('id');
            $table->text('question');
            $table->text('category');
            $table->timestamps();
        });

        Schema::create('quiz_question_choices', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('quiz_question_id')->references('id')->on('quiz_questions');
            $table->text('choice');
            $table->integer('points');
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
        Schema::drop('quiz_question_choices');
        Schema::drop('quiz_questions');
    }

}
