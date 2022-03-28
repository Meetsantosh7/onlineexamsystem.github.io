<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('useranswers', function (Blueprint $table) {
            $table->increments('a_id');
            $table->integer('u_id')->unsigned();
            $table->integer('exam_id')->unsigned();
            $table->integer('q_id')->unsigned();
            $table->integer('user_option_id')->unsigned();
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
        Schema::dropIfExists('useranswers');
    }
}
