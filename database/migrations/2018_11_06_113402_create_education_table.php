<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_campus')->unsigned();
            $table->string('nama_kampus');
            $table->string('jurusan');
            $table->string('fakultas');
            $table->string('ipk');
            $table->string('wak_kul');
            $table->integer('id_school')->unsigned();
            $table->string('nama_sekolah');
            $table->string('jurusan_sekolah');
            $table->string('waktu_sklh');
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
        Schema::dropIfExists('education');
    }
}
