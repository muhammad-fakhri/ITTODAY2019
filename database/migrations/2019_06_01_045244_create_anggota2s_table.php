<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggota2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('nim');
            $table->string('tmptLahir');
            $table->date('tglLahir');
            $table->tinyInteger('jenKel');
            $table->string('asalInstansi');
            $table->string('fakultas');
            $table->string('jurusan');
            $table->string('email');
            $table->string('noHP');
            $table->string('idLine')->nullable($value = true);
            $table->string('namaBerkasSKMA')->nullable($value = true);
            $table->string('alamatBerkasSKMA')->nullable($value = true);
            $table->string('namaBerkasKTM')->nullable($value = true);
            $table->string('alamatBerkasKTM')->nullable($value = true);
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
        Schema::dropIfExists('anggota2s');
    }
}
