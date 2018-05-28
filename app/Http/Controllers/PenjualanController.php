<?php

namespace App\Http\Controllers;

use App\Game;
use App\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $games = Auth::user()->jual;
        return view('user.penjualan.index')->with('games',$games);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $jual = new Penjualan;
        $jual->id_user = Auth::user()->id;
        $jual->id_game = $request->input('id_game');
        $jual->harga = $request->input('harga');
        $jual->harga_extend = $request->input('harga_extend');
        $jual->extra_desc = $request->input('extra_desc');
        $jual->save();
        return redirect()->route('penjualan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        //
        return view('user.penjualan.edit')->with('penjualan',$penjualan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //
        $penjualan->id_game = $request->input('id_game');
        $penjualan->harga = $request->input('harga');
        $penjualan->harga_extend = $request->input('harga_extend');
        $penjualan->extra_desc = $request->input('extra_desc');
        $penjualan->save();
        return redirect()->route('penjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualan $penjualan)
    {
        //
        $penjualan->delete();
        return redirect()->route('penjualan.index');
    }

    public function adminPenjualan(){
        $games = Game::all();
        return view('admin.penjualan.index')->with('games',$games);
    }
}
