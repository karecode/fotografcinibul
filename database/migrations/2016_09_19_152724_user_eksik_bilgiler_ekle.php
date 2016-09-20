<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserEksikBilgilerEkle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname')->after('name');
            $table->string('fullname')->after('surname');
            $table->boolean('user_type')->after('fullname');
            $table->string('phone')->after('user_type');
            $table->integer('il_id')->after('phone');
            $table->integer('ilce_id')->after('il_id');
            $table->boolean('banned')->after('ilce_id');
            $table->boolean('pasif')->after('banned');
            $table->integer('kredi')->after('pasif');
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
        Schema::table('users', function ( $table) {
            $table->dropColumn('surname');
            $table->dropColumn('fullname');
            $table->dropColumn('user_type');
            $table->dropColumn('phone');
            $table->dropColumn('il_id');
            $table->dropColumn('ilce_id');
            $table->dropColumn('banned');
            $table->dropColumn('pasif');
            $table->dropColumn('kredi');
        });
    }
}
