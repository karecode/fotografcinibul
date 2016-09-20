<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TeklifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teklif',function (Blueprint $table){
            $table->increments('id');
            $table->integer('teklif_istek_id');
            $table->integer('user_id');
            $table->text('teklif_metni');
            $table->string('teklif_fiyati');
            $table->string('onceki_teklif_fiyati');
            $table->boolean('telefon_istek');
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
        Schema::drop('teklif');
    }
}
