<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpa', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->string('mtk')->nullable();
            $table->string('indonesia')->nullable();
            $table->string('psikotes')->nullable();
            $table->string('baca_alquran')->nullable();
            $table->string('rata_rata')->nullable();
            $table->string('grade')->nullable();
            $table->string('keterangan_id')->nullable();
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
        Schema::dropIfExists('tpa');
    }
}
