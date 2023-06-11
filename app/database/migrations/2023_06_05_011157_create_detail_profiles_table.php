<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('status');
            $table->string('email');
            $table->string('password');
            $table->string('wa');
            $table->string('phone');
            $table->string('birthday');
            $table->string('website');
            $table->string('github');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('cv');
            $table->string('resume');
            $table->string('ktp');
            $table->string('ijazah');
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
        Schema::dropIfExists('detail_profiles');
    }
};
