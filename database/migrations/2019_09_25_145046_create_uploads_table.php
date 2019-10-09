<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',30);
            $table->enum('jenis_tugas', ['individu','kelompok']);
            $table->string('pelajaran', 30);
            $table->string('nama_tugas', 60);
            $table->string('nama_file', 256);
            $table->dateTime('tanggal_upload');
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
        Schema::dropIfExists('uploads');
    }
}
