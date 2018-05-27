<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    //
    protected $table = 'pembelian';
    protected $fillable = ['id_user','alamat','pembayaran_via','total_payment'];

    protected function user(){
        return $this->belongsTo('App\User','id_user');
    }
    protected function detail(){
        return $this->hasMany('App\Detail_pembelian','id_pembelian');
    }
}
