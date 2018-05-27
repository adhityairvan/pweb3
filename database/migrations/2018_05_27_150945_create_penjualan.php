<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('penjualan',function (Blueprint $table){
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_game');
            $table->integer('harga');
            $table->integer('harga_extend');
            $table->longText('extra_desc');
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
        //
        Schema::dropIfExists('penjualan');
    }
}
