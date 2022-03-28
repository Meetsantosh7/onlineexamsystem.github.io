<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('schools', function (Blueprint $table) {
            $table->increments('s_id');
            $table->string('s_name');
            $table->string('s_contact')->nullable();
            $table->string('s_email')->nullable();
            $table->string('s_address')->nullable();
            $table->string('s_principle')->nullable();
            $table->string('s_vice_principle')->nullable();
            $table->integer('s_created_by')->unsigned();
            $table->integer('s_updated_by')->unsigned()->nullable();
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
        Schema::dropIfExists('schools');
    }
}
