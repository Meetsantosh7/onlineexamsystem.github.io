<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('e_id');
            $table->string('e_name');
            $table->integer('class_id');
            $table->integer('module_id');
            $table->string('e_duration')->nullable();
            $table->string('e_start_time')->nullable();
            $table->string('e_end_time')->nullable();
            $table->date('e_date')->nullable();
            $table->string('e_marks')->nullable();
            $table->string('e_status')->default('A')->comment('A for Active & I for Inactive');
            $table->string('is_completed')->default('N')->comment('Y for Yes N for No');
            $table->integer('e_created_by')->unsigned();
            $table->integer('e_updated_by')->unsigned()->nullable();
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
        Schema::dropIfExists('exams');
    }
}
