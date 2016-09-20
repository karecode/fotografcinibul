<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KrediKullanim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kredi_kullanim',function (Blueprint $table){
            $table->increments('id');
            $table->string('kredi_adi');
            $table->text('aciklama');
            $table->integer('kredi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kredi_kullanim');
    }
}
