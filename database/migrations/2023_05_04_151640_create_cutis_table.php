<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cutis', function (Blueprint $table) {
            $table->id();
            $table->string('id_employee');
            $table->string('nama');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('masakerja');
            $table->string('alasancuti');
            $table->string('alamatcuti');
            $table->string('ttd');
            $table->biginteger('notelepon');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->string('approved');
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
        Schema::dropIfExists('cutis');
    }
}
