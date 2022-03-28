<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('userexam', function (Blueprint $table) {
            $table->increments('ue_id');
            $table->integer('user_id');
            $table->integer('exam_id');
            $table->string('is_completed')->default('N')->comment('Y  for true and N for N');
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
        Schema::dropIfExists('userexam');
    }
}
