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
        Schema::create('table_uasrekweb', function (Blueprint $table) {
            $table->id();
            $table->integer('NoPendaftaran');
            $table->integer('Nisn');
            $table->string('NamaLengkap');
            $table->string('JenisKelamin');
            $table->string('Kewarganegaraan');
            $table->string('Agama');
            $table->string('GolonganDarah');
            $table->bigInteger('NoTelepon');
            $table->string('Email');
            $table->string('Alamat');
            $table->string('TempatLahir');
            $table->string('TanggalLahir');
            $table->string('AsalSekolah');
            $table->string('ProgramStudi');
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
        //
    }
};
