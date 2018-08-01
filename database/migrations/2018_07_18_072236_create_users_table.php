<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nickname');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('dob');
            $table->string('password')->nullable();
            $table->enum('verified', [0, 1])->default('0');
            $table->string('verification_token')->nullable();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->unsignedInteger('race_id');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('state_id');
            $table->unsignedInteger('city_id');
            $table->text('address')->nullable();
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('snapchat');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('experience_id');
            $table->text('acp');
            $table->enum('sponsor', ['none', 'in_process', 'yes']);
            $table->text('sponsor_details')->nullable();
            $table->string('no_of_followers');
            $table->text('bio')->nullable();
            $table->enum('bio_type', ['text', 'video'])->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('race_id')->references('id')->on('races');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('experience_id')->references('id')->on('experiences');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
