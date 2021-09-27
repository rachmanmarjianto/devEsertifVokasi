<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJenisKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jenis_kegiatan', function (Blueprint $table) {
            $table->foreign('ID_KELOMPOK_KEGIATAN', 'jenis_kegiatan_ibfk_1')->references('ID_KELOMPOK_KEGIATAN')->on('kelompok_kegiatan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jenis_kegiatan', function (Blueprint $table) {
            $table->dropForeign('jenis_kegiatan_ibfk_1');
        });
    }
}
