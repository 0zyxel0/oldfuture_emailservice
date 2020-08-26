<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('firma')->nullable();
            $table->string('street')->nullable();
            $table->string('plz')->nullable();
            $table->string('ort')->nullable();
            $table->string('telephone')->nullable();
            $table->string('emailaddress')->nullable();
            $table->longText('display_option')->nullable();
            $table->longText('data_option')->nullable();
            $table->string('desinex_option')->nullable();
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
        Schema::dropIfExists('email_statistics');
    }
}
