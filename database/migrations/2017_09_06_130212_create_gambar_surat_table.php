<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGambarSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambar_surat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_surat_masuk')->unsigned();
            $table->foreign('id_surat_masuk')->references('id')->on('surat_masuk')->onDelete('cascade')->onUpdate('cascade');
            $table->string('filename');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gambar_surat');
    }
}
