<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameCatalog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('games',function (Blueprint $table){
            $table->increments('id');
            $table->string('game_name');
            $table->string('system');
            $table->longText('description');
            $table->integer('stock');
            $table->string('game_cover');
            $table->integer('sold');
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
        Schema::dropIfExists('games');
    }
}
