<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SiteBilgiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_bilgi',function (Blueprint $table){
            $table->increments('id');
            $table->string('site_adi');
            $table->text('hakkimizda');
            $table->string('email');
            $table->string('telefon');
            $table->string('fax');
            $table->string('logo');
            $table->text('adres');
            $table->string('latitude');
            $table->string('longtitude');
            $table->text('keywords');
            $table->text('description');
            $table->string('mikro_veri');
            $table->string('shortlink');
            $table->text('canoncical');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('site_bilgi');
    }
}
