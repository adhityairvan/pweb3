<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_Extra extends Model
{
    //
    protected $table = 'game_image';
    protected $fillable = ['id_game','image_link','image_alt'];
    public $timestamps = false;

    public function game(){
        return $this->belongsTo('App\Game','id_game');
    }
}
