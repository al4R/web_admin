<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->bigIncrements('id',10);
            $table->string('name',30)->nullable();
            $table->string('merk',10)->unique()->nullable();
            $table->string('harga',10)->nullable();
            $table->string('tahun',10)->nullable();
            $table->string('transmisi',10)->nullable();
            $table->string('kapasitas',10)->nullable();
            $table->string('no_kendaraan',10)->nullable();
            $table->boolean('status')->default(false);
            $table->string('image',100)->nullable();
            $table->text('deskripsi')->nullable();
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
        Schema::dropIfExists('mobils');
    }
}
