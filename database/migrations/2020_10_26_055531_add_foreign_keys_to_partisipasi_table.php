<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPartisipasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partisipasi', function (Blueprint $table) {
            $table->foreign('ID_JENIS_KEGIATAN', 'MERUPAKAN_FK')->references('ID_JENIS_KEGIATAN')->on('jenis_kegiatan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partisipasi', function (Blueprint $table) {
            $table->dropForeign('MERUPAKAN_FK');
        });
    }
}
