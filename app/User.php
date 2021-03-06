<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','alamat','no_hp'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function jual(){
        return $this->hasMany('App\Penjualan','id_user');
    }

    public function cart(){
        return $this->hasMany('App\Cart','id_user');
    }

    public function pembelian(){
        return $this->hasMany('App\Pembelian','id_user');
    }
}
