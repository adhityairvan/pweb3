<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $table = 'carts';
    protected $fillable = ['id_user','id_game','id_jumlah','total_harga'];

    public function game(){
        return $this->belongsTo('App\Game','id_game');
    }
    public function user(){
        return $this->belongsTo('App\User','id_user');
    }

}
