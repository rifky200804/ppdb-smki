<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangTuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orang_tua', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            
            $table->string('nama_ayah',100)->nullable();
            $table->integer('usia_ayah')->nullable();
            $table->string('pendidikan_ayah',50)->nullable();
            $table->string('pekerjaan_ayah',100)->nullable();
            $table->bigInteger('penghasilan_ayah')->nullable();
            $table->string('no_telepon_ayah',20)->nullable();

            $table->string('nama_ibu',100)->nullable();
            $table->integer('usia_ibu')->nullable();
            $table->string('pendidikan_ibu',50)->nullable();
            $table->string('pekerjaan_ibu',100)->nullable();
            $table->bigInteger('penghasilan_ibu')->nullable();
            $table->string('no_telepon_ibu',20)->nullable();
            
            $table->string('nama_wali',100)->nullable();
            $table->integer('usia_wali')->nullable();
            $table->string('pendidikan_wali',50)->nullable();
            $table->string('pekerjaan_wali',100)->nullable();
            $table->bigInteger('penghasilan_wali')->nullable();
            $table->string('no_telepon_wali',20)->nullable();
            
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
        Schema::dropIfExists('orang_tua');
    }
}
