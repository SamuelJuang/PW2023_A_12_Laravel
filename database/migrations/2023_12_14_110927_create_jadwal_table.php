<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('asal');
            $table->string('tujuan');
            $table->unsignedBigInteger('id_kereta');
            $table->foreign('id_kereta')->references('id')->on('kereta_api')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kelas');
            $table->time('jam_berangkat');
            $table->integer('harga');
            $table->integer('jumlah_kursi');
            $table->dateTime('tanggal_pergi');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwals');
    }

   
}