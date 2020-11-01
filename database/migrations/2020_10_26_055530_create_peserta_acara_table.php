<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaAcaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_acara', function (Blueprint $table) {
            $table->string('USERNAME', 16)->index('MEMILIKI_2_FK');
            $table->integer('ID_ACARA')->index('MENGIKUTI_FK');
            $table->integer('ID_PARTISIPASI')->index('SEBAGAI_FK')->nullable();
            $table->text('DIGITAL_SIGNATURE')->nullable();
            $table->primary(['USERNAME', 'ID_ACARA']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta_acara');
    }
}
