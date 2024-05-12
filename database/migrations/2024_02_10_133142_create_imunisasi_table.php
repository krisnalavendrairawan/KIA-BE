<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imunisasi', function (Blueprint $table) {
            $table->bigIncrements('id_imunisasi');
            $table->date('tgl_imunisasi');
            $table->string('nik_anak', 16);
            $table->foreign('nik_anak')->references('nik')->on('anak')->onDelete('cascade');
            $table->string('jenis_imunisasi');
            $table->bigInteger('id_kader');
            $table->foreign('id_kader')->references('id')->on('kader')->onDelete('cascade');
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
        Schema::dropIfExists('imunisasi');
    }
};
