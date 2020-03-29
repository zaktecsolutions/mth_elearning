<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('topic_id')->nullable();
            $table->string('lesson_code');
            $table->string('lesson_title');
			$table->string('lesson_obj');
			$table->string('lesson_ws');
			$table->string('lesson_body');
			$table->integer('lesson_grade');
			$table->boolean('lesson_completed')->default(false);
            $table->timestamps();


            $table->foreign('topic_id')
            ->references('id')
            ->on('topics')
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
        Schema::dropIfExists('lessons');
    }
}
