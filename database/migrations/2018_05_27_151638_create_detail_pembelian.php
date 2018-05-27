<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPembelian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('detail_pembelian',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_pembelian');
            $table->integer('id_game');
            $table->integer('jumlah');
            $table->integer('total_harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('detail_pembelian');
    }
}
