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
            $table->increments('q_id');
            $table->integer('category_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->string('q_text');
            $table->string('q_figure')->nullable();
            $table->integer('ans_id')->unsigned();
            $table->string('q_status')->comment('A for active I for inactive');
            $table->integer('q_created_by')->unsigned();
            $table->integer('q_updated_by')->unsigned()->nullable();
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
