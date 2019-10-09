<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->bigIncrements('id');
            // nama (tugas), kelas, mata pelajaran, waktu dibuka, waktu ditutup, nama guru
            $table->string("nama_tugas", 120);
            $table->string('kelas', 10);
            $table->string('mapel', 30);
            $table->dateTime('waktu_buka');
            $table->dateTime('waktu_tutup');
            $table->string('nama_guru', 30);
            $table->softDeletes();
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
        Schema::dropIfExists('tugas');
    }
}
