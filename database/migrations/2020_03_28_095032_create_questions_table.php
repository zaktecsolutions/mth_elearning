<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('quiz_id')->nullable();
            $table->unsignedBigInteger('topic_id')->nullable();
            $table->unsignedBigInteger('lesson_id')->nullable();
            $table->string('question_title');
            $table->string('question_body');
            $table->string('imagepath');
            $table->boolean('published')->default(false);
            $table->timestamps();
            $table->foreign('quiz_id')
                ->references('id')
                ->on('courses')
                ->onDelete('cascade');
            $table->foreign('topic_id')
                ->references('id')
                ->on('topics')
                ->onDelete('cascade');
            $table->foreign('lesson_id')
                ->references('id')
                ->on('lessons')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
