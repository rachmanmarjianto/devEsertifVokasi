<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acara', function (Blueprint $table) {
            $table->integer('ID_ACARA', true);
            $table->integer('ID_TEMPLATE')->index('MENGGUNAKAN_FK');
            $table->integer('ID_TINGKAT')->index('MEMILIKI_FK');
            $table->integer('ID_PRODI')->nullable()->index('RELATIONSHIP_9_FK');
            $table->integer('ID_TAHUN_AKADEMIK')->index('PADA_FK');
            $table->integer('ID_JENIS_KEGIATAN')->index('MERUPAKAN_FK');
            $table->string('NAMA_ACARA', 300);
            $table->date('TANGGAL_PENYELENGGARAAN');
            $table->timestamp('TIMESTAMP')->useCurrent();
            $table->text('FILE_SERTIF')->nullable();
            $table->string('PENYELENGGARA', 300);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acara');
    }
}
