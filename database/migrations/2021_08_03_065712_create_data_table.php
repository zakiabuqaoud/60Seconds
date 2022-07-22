<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->json('best');
            $table->text('lorem');
            $table->string('bestImage');
            $table->string('playstore');
            $table->string('appstore');
            $table->string("likes");
            $table->string("likesNumber");
            $table->string("likesImage");
            $table->string('communication');
            $table->string("communicationNumber");
            $table->string("communicationImage");
            $table->string('advertising');
            $table->string("advertisingNumber");
            $table->string("advertisingImage");
            $table->string('users');
            $table->string("usersNumber");
            $table->string("usersImage");
            $table->string("about");
            $table->string("aboutImage");
            $table->text('reliable');
            $table->text('everything');
            $table->text("tons");
            $table->string("feature");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
