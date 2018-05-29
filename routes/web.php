<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function (){
    Route::resource('game','GameController');
    Route::get('penjualan','PenjualanController@adminPenjualan');
});
Route::get('user',function (){
    return view('user-page.user');
});
Route::prefix('user')->group(function(){
    Route::resource('penjualan','PenjualanController')->except([
        'show',
    ]);
    Route::resource('pembelian','PembelianController')->except([
        'show','delete','edit','update',
    ]);
    Route::get('cart','CartController@index');
});

Route::get('test', function(){
    return view('cart-chekout');
});