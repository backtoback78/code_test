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
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('users_id')->unsigned()->nullable();
            $table->string('abstract', 100)->nullable();
            $table->text('content', 200)->nullable();
            $table->dateTime('published_at')->nullable();
            $table->enum('status', ['published', 'unpublished'])->default('unpublished');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('SET NULL');
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
