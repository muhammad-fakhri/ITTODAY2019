<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('berkas', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('idTim');
			$table->string('namaTim')->unique()->nullable($value = true);
			$table->tinyInteger('jenisTim');
			$table->string('namaBerkas')->nullable($value = true);
			$table->string('alamatBerkas')->nullable($value = true);
            $table->string('linkVideo')->nullable($value = true);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('berkas');
	}
}
