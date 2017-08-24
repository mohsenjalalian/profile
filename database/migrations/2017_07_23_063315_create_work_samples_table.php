<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_samples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('link');
            $table->string('photo')->nullable();

            $table->timestamps();
        });

        //Pivot Table
        Schema::create('category_work_sample', function (Blueprint $table) {
            $table->integer('category_id');
            $table->integer('work_sample_id');
            $table->primary(['category_id','work_sample_id']);

            $table->timestamps();
        });

        //Pivot Table
        Schema::create('skills_work_sample', function (Blueprint $table) {
            $table->integer('skills_id');
            $table->integer('work_sample_id');
            $table->primary(['skills_id','work_sample_id']);


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
        Schema::dropIfExists('work_samples');
    }
}
