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
        Schema::create('penimbangan', function (Blueprint $table) {
            $table->bigIncrements('id_penimbangan');
            $table->date('tgl_penimbangan');
            $table->string('nik_anak', 16);
            $table->foreign('nik_anak')->references('nik')->on('anak')->onDelete('cascade');
            $table->decimal('berat_badan', 8, 2); // Change data type to decimal with precision 8 and scale 2
            $table->decimal('tinggi_badan', 8, 2);
            $table->string('status_gizi');
            $table->string('keterangan');
            $table->string('saran');
            $table->bigInteger('id_kader');
            $table->foreign('id_kader')->references('id')->on('users')->onDelete('cascade');
            $table->integer('usia');
            $table->integer('bulan_ke');
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
        Schema::dropIfExists('penimbangan');
    }
};
