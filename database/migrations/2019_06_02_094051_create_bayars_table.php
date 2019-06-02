<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayarsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('bayars', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('idTim');
			$table->string('namaTim')->unique()->nullable($value = true);
			$table->tinyInteger('jenisTim');
			$table->string('namaBayar')->nullable($value = true);
			$table->string('alamatBayar')->nullable($value = true);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('bayars');
	}
}
