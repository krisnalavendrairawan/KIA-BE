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
        Schema::create('riwayat_penyakit', function (Blueprint $table) {
            $table->bigIncrements('id_penyakit');
            $table->date('tgl_rujukan');
            $table->string('jenis_penyakit', 16);
            $table->string('nik_anak', 16);
            $table->foreign('nik_anak')->references('nik')->on('anak')->onDelete('cascade');
            $table->string('rujukan');
            $table->string('saran');
            $table->bigInteger('id_kader');
            $table->foreign('id_kader')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('riwayat_penyakit');
    }
};
