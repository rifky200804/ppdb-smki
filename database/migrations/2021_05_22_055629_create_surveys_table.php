<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->string('status_rumah',100)->nullable();
            $table->string('jumlah_tanggungan_ortu',100)->nullable();
            $table->string('status_tinggal',100)->nullable();
            $table->string('pengeluaran_tiap_bulan',100)->nullable();
            $table->string('perabotan_rumah_tangga',100)->nullable();
            $table->string('pengeluaran_perhari',100)->nullable();
            $table->string('prestasi_yang_dicapai',100)->nullable();
            $table->string('catatan_khusus',100)->nullable();
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
        Schema::dropIfExists('survey');
    }
}
