<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsalSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asal_sekolah', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->string('asal_sekolah');
            $table->text('alamat_lengkap');
            $table->integer('tahun_lulus');
            $table->string('no_peserta_un_smp');
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
        Schema::dropIfExists('asal_sekolah');
    }
}
