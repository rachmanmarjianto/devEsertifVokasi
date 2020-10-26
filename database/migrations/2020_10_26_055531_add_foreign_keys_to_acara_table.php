<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAcaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acara', function (Blueprint $table) {
            $table->foreign('ID_TAHUN_AKADEMIK', 'acara_ibfk_1')->references('ID_TAHUN_AKADEMIK')->on('tahun_akademik')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_TEMPLATE', 'acara_ibfk_2')->references('ID_TEMPLATE')->on('template_sertifikat')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_PRODI', 'acara_ibfk_3')->references('ID_PRODI')->on('prodi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_TINGKAT', 'acara_ibfk_4')->references('ID_TINGKAT')->on('tingkat')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('ID_JENIS_KEGIATAN', 'acara_ibfk_5')->references('ID_JENIS_KEGIATAN')->on('jenis_kegiatan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('acara', function (Blueprint $table) {
            $table->dropForeign('acara_ibfk_1');
            $table->dropForeign('acara_ibfk_2');
            $table->dropForeign('acara_ibfk_3');
            $table->dropForeign('acara_ibfk_4');
            $table->dropForeign('acara_ibfk_5');
        });
    }
}
