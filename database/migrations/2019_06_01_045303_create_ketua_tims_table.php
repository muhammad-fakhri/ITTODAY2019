<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKetuaTimsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('ketua_tims', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('idTim');
			$table->string('nama')->nullable($value = true);
			$table->string('nim')->nullable($value = true);
			$table->string('tmptLahir')->nullable($value = true);
			$table->date('tglLahir')->nullable($value = true);
			$table->tinyInteger('jenKel');
			$table->string('asalInstansi')->nullable($value = true);
			$table->string('fakultas')->nullable($value = true);
			$table->string('jurusan')->nullable($value = true);
			$table->string('email')->nullable($value = true);
			$table->string('noHP')->nullable($value = true);
			$table->string('noWA')->nullable($value = true);
			$table->string('idLine')->nullable($value = true);
			$table->string('namaSKMA')->nullable($value = true);
			$table->string('alamatSKMA')->nullable($value = true);
			$table->string('namaKTM')->nullable($value = true);
			$table->string('alamatKTM')->nullable($value = true);
			$table->string('namaFoto')->nullable($value = true);
			$table->string('alamatFoto')->nullable($value = true);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('ketua_tims');
	}
}
