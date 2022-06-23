<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_user_id')->constrained('exam_users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('exam_question_id')->constrained('exam_questions')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('myresponse')->nullable();
            $table->integer('answerorigin')->nullable();
            $table->integer('rwsult')->nullable();
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
        Schema::dropIfExists('exam_responses');
    }
}
