<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    //
    protected $table = 'penjualan';
    protected $fillable = ['id_user','id_game','harga','harga_extend','extra_desc'];

    public function game(){
        return $this->belongsTo('App\Game','id_game');
    }
    public function penjual(){
        return $this->belongsTo('App\User','id_user');
    }
}
