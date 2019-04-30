<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('team_id');
            $table->string('member_one')->nullable();
            $table->string('member_two')->nullable();
            $table->string('member_three')->nullable();
            $table->string('school');
            $table->string('province');
            $table->string('line_id')->nullable();
            $table->string('phone_num');
            $table->string('ktm_img1')->nullable();
            $table->string('ktm_img2')->nullable();
            $table->string('ktm_img3')->nullable();
            $table->string('type');//tipe lomba yang akan diikuti
            $table->string('letter')->nullable();//surat keterangan aktif
            $table->string('payment')->nullable();
            $table->integer('verify_ktm')->default(0);
            $table->integer('verify_letter')->default(0);
            $table->integer('verify_payment')->default(0);
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
        Schema::dropIfExists('teams');
    }
}
