<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UyelikTipi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uyelik_tipi',function (Blueprint $table){
             $table->increments('id');
            $table->string('uyelik_adi');
            $table->text('aciklama');
            $table->string('kredi');
            $table->string('fiyat');
            $table->json('metin');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('uyelik_tipi');
    }
}
