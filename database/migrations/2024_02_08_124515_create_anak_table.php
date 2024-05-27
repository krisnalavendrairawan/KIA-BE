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
        Schema::create('anak', function (Blueprint $table) {
            $table->string('nik', 16)->primary();
            $table->string('no_kk', 16)->unique()->comment('Nomor Kartu Keluarga');
            $table->string('nama_anak', 50);
            $table->string('nama_ibu', 50);
            $table->string('nama_ayah', 50);
            $table->string('anak_ke', 2)->comment('Anak ke-berapa dari pasangan tersebut');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->decimal('bb_lahir', 8, 2)->comment('Berat Badan Lahir');
            $table->integer('pb_lahir')->comment('Panjang Badan Lahir');
            $table->string('no_hp_ortu', 13);
            $table->string('alamat');
            $table->integer('umur');
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
        Schema::dropIfExists('anak');
    }
};
