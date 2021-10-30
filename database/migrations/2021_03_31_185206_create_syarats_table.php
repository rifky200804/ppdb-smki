<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyaratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syarat', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->string('akta_lahir');
            $table->string('kartu_keluarga');
            $table->string('foto_peserta');
            $table->string('ket_tidak_mampu');
            $table->string('ktp_ayah')->nullable();
            $table->string('ktp_ibu')->nullable();
            $table->string('ktp_wali')->nullable();
            $table->integer('keterangan_id')->nullable();
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
        Schema::dropIfExists('syarats');
    }
}
