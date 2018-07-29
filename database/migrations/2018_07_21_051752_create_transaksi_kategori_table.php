<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_kategori', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaksi_id')->unsigned();
            $table->integer('kategori_id')->unsigned();
            $table->integer('berat');
            $table->integer('total');

            $table->foreign('transaksi_id')->references('id')->on('transaksi')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_kategori');
    }
}
