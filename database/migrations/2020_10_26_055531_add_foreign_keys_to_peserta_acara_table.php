<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPesertaAcaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peserta_acara', function (Blueprint $table) {
            $table->foreign('NIM', 'peserta_acara_ibfk_1')->references('nim')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_ACARA', 'peserta_acara_ibfk_2')->references('ID_ACARA')->on('acara')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_PARTISIPASI', 'peserta_acara_ibfk_3')->references('ID_PARTISIPASI')->on('partisipasi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peserta_acara', function (Blueprint $table) {
            $table->dropForeign('peserta_acara_ibfk_1');
            $table->dropForeign('peserta_acara_ibfk_2');
            $table->dropForeign('peserta_acara_ibfk_3');
        });
    }
}
