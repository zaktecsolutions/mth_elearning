<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->string('topic_name');
			$table->string('topic_code');
			$table->string('topic_desc');
			$table->integer('topic_grade');
            $table->integer('topic_les_num');
            $table->timestamps();

            $table->foreign('course_id')
            ->references('id')
            ->on('courses')
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
        Schema::dropIfExists('topics');
    }
}
