<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->bigIncrements('id',10);
            $table->integer('transaksi_id')->unsigned();
            $table->integer('mobil_id')->unsigned();
            $table->string('harga_sewa',10)->nullable();
            // $table->string('tgl_sewa',20)->nullable();
            // $table->string('tgl_akhir_sewa',20)->nullable();
            // $table->string('lama_sewa',10)->nullable();
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
        Schema::dropIfExists('detail_transaksis');
    }
}
