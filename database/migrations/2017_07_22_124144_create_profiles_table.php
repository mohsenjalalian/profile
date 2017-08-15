<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('summary')->nullable();
            $table->text('about_me')->nullable();
            $table->string('last_degree');
            $table->string('birth_day');
            $table->enum('marriage', ['متاهل','مجرد']);
            $table->enum('military', ['تمام شده','معاف','معاف پزشکی']);
            $table->string('birth_place');
            $table->enum('gender', ['مرد', 'زن']);
            $table->string('job');
            $table->string('photo')->nullable();
            $table->string('cover')->nullable();
            $table->string('pdf')->nullable();

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
        Schema::dropIfExists('profiles');
    }
}
