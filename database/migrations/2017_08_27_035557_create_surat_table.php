<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_surat')->unique();
            $table->integer('id_jenis')->unsigned();
            $table->integer('id_client')->unsigned();
            $table->string('perihal');
            $table->string('lampiran');
            $table->date('tanggal');
            $table->text('isi_surat');
            $table->timestamps();

            $table->foreign('id_jenis')->references('id')->on('jenis');
            $table->foreign('id_client')->references('id')->on('client');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat');
    }
}
