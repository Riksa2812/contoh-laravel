<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiPenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_penjualans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pembeli');
            $table->unsignedBigInteger('barang_id');
            $table->unsignedInteger('jumlah_barang');
            $table->unsignedInteger('total_harga');
            
            $table->timestamps();

            $table->foreign('barang_id')->on('master_barangs')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_penjualans');
    }
}
