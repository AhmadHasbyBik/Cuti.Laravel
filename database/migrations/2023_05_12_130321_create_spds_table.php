<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spds', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('id_employee');
            $table->string('no_srt');
            $table->string('nama');
            $table->string('pangkat');
            $table->string('jabatan');
            $table->string('tingkat_biaya');
            $table->string('perjalanan_dinas');
            $table->string('kendaraan');
            $table->string('tempat_berangkat');
            $table->string('tempat_tujuan');
            $table->string('lama_perjalanan');
            $table->date('tgl_berangkat');
            $table->date('tgl_kembali');
            $table->string('instansi');
            $table->string('kode_rekening');
            $table->string('keterangan_lain');
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
        Schema::dropIfExists('spds');
    }
}
