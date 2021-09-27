<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateSertifikatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_sertifikat', function (Blueprint $table) {
            $table->integer('ID_TEMPLATE', true);
            $table->string('NAMA_TEMPLATE', 30);
            $table->text('FILE_TEMPLATE');
            $table->text('FILE_PHP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_sertifikat');
    }
}
