<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nip');
            $table->enum('jeniskelamin',['Laki-laki','Perempuan']);
            $table->biginteger('notelepon');
            $table->string('foto');
            $table->string('jabatan');
            $table->string('golongan');
            $table->string('bidang');
            $table->string('jatahcuti');
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
        Schema::dropIfExists('employees');
    }
}
