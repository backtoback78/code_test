<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title');
            $table->integer('questions_id')->unsigned()->nullable();
            $table->integer('users_id')->unsigned()->nullable();
            $table->string('abstract', 100);
            $table->text('content');
            $table->dateTime('date')->nullable();
            $table->enum('status', ['published', 'unpublished', 'draft'])->default('unpublished');
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('SET NULL');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('SET NULL');
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
        Schema::dropIfExists('questions');
    }
}
