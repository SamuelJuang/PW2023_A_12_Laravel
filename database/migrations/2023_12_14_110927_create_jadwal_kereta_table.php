<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalKeretaTable extends Migration
{
    public function up()
    {
        Schema::create('jadwal_kereta', function (Blueprint $table) {
            $table->id();
            $table->string('asal');
            $table->string('tujuan');
            $table->string('nama_kereta');
            $table->string('kelas');
            $table->time('jam_berangkat');
            $table->integer('harga');
            $table->integer('jumlah_kursi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwal_kereta');
    }
}