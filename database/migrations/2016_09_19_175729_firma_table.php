<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FirmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firma', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('firma_adi');
            $table->string('slug')->index();
            $table->string('firma_resim');
            $table->string('ust_panel_foto');
            $table->text('aciklama');
            $table->text('anahtar_kelimeler');
            $table->text('tanitim_yazisi');
            $table->string('firma_tur');
            $table->text('hakkimizda');
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
        Schema::drop('firma');
    }
}
