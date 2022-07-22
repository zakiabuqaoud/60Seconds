<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHowconcatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('howconcats', function (Blueprint $table) {
            $table->id();
            $table->string('how');
            $table->string('howImage');
            $table->string('first');
            $table->string('second');
            $table->string('third');
            $table->string('fourth');
            $table->text("loremSmoll");
            $table->string('client');
            $table->string('connectUs');
            $table->string('contactInformation');
            $table->string('fullNameImage');
            $table->string('emailImage');
            $table->string('contactForm');
            $table->string('location');
            $table->string('locationValue');
            $table->string('locationImage');
            $table->string('email');
            $table->string('emailValue');
            $table->string('mobile');
            $table->string('mobileValue');
            $table->string('mobileImage');
            $table->string('phone');
            $table->string('phoneValue');
            $table->string('phoneImage');
            $table->string('placeholderFullName');
            $table->string('placeholderEmail');
            $table->string('placeholderMessage');
            $table->string('send');
            $table->string('homeList');
            $table->string('aboutList');
            $table->string('featureList');
            $table->string('howWorkList');
            $table->string('reviewsList');
            $table->string('connectList');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('howconcats');
    }
}
