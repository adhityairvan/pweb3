<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $table = 'carts';
    protected $fillable = ['id_user','id_penjualan','id_jumlah','total_harga'];

    public function penjualan(){
        return $this->belongsTo('App\Penjualan','id_penjualan');
    }
    public function user(){
        return $this->belongsTo('App\User','id_user');
    }

}
