<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_Pembelian extends Model
{
    //
    protected $table = 'detail_pembelian';
    protected $fillable = ['id_pembelian','id_game','jumlah','total_harga'];
    public $timestamps = false;

    protected function pembelian(){
        return $this->belongsTo('App\Pembelian','id_pembelian');
    }
    protected function game(){
        return $this->belongsTo('App\Game','id_game');
    }
}
