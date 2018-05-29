<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    protected $fillable =['game_name','system','description','stock','game_cover','sold'];

    public function extra_image(){
        return $this->hasMany('App\Image_Extra','id_game');
    }
    public function penjualan(){
        return $this->hasMany('App\Penjualan','id_game');
    }
}
