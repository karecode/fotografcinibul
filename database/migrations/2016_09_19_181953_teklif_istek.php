<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TeklifIstek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teklif_istek', function (Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->string('baslik');
            $table->string('slug')->index();
            $table->text('aciklama');
            $table->json('servisler');
            $table->integer('fotografci_turu_id');
            $table->integer('ilce_id');
            $table->timestamp('randevu_tarihi');
            $table->string('butce');
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
        Schema::drop('teklif_istek');
    }
}
