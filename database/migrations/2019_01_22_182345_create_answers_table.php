<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('answers', function (Blueprint $table) {
            $table->increments('ans_id');
             $table->string('answers')->nullable();
            $table->string('ans_figure')->nullable();
            $table->integer('ques_id')->unsigned();
            $table->integer('ans_created_by')->unsigned();
            $table->integer('ans_updated_by')->unsigned()->nullable();
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
        Schema::dropIfExists('answers');
    }
}
