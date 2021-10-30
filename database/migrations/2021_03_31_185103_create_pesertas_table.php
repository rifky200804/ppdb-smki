<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->string('nisn',15);
            $table->string('nama_peserta');
            $table->string('ukuran_baju',3);
            $table->char('jenkel',9);
            $table->text('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama',50);
            $table->integer('anak_ke');
            $table->integer('dari_saudara_kandung');
            $table->string('status_siswa',50);
            $table->string('bahasa');
            $table->text('alamat');
            $table->integer('orangtua_id');
            $table->integer('asal_sekolah_id');
            $table->integer('syarat_id');
            $table->integer('keterangan_id');
            $table->integer('survey_id');
            $table->integer('dokumentasi_id');
            $table->integer('tpa_id');
            
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
        Schema::dropIfExists('peserta');
    }
}
