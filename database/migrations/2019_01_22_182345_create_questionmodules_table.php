<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('questionmodules', function (Blueprint $table) {
            $table->increments('m_id');
             $table->string('m_name');
             $table->string('ques_ids');
            $table->integer('m_created_by')->unsigned()->nullable();
            $table->integer('m_updated_by')->unsigned()->nullable();
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
        Schema::dropIfExists('questionmodules');
    }
}
