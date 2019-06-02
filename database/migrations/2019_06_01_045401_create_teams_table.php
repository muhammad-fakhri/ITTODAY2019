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
            $table->bigIncrements('id');
            $table->string('namaTim')->unique()->nullable($value = true);
            $table->tinyInteger('jenisTim');
            $table->integer('idKetuaTim')->nullable($value = true);
            $table->boolean('verifSKMAKetua')->default(false);
            $table->boolean('verifKTMKetua')->default(false);
            $table->boolean('verifFotoKetua')->default(false);
            $table->integer('idAnggota1')->nullable($value = true);
            $table->boolean('verifSKMA1')->default(false);
            $table->boolean('verifKTM1')->default(false);
            $table->boolean('verifFoto1')->default(false);
            $table->integer('idAnggota2')->nullable($value = true);
            $table->boolean('verifSKMA2')->default(false);
            $table->boolean('verifKTM2')->default(false);
            $table->boolean('verifFoto2')->default(false);
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
