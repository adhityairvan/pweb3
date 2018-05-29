<?php

namespace App\Http\Controllers;

use App\Detail_Pembelian;
use App\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pembelian = Pembelian::where('id_user',Auth::user()->id)->get();
        return view('user.pembelian.index')->with('pembelian',$pembelian);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.pembelian.create');
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
        $items = Auth::user()->cart;
        $pembelian = New Pembelian;
        $pembelian->id_user = Auth::user()->id;
        $pembelian->alamat = $request->input('alamat');
        $pembelian->pembayaran_via = $request->input('pembayaran_via');
        $total = 0;
        foreach ($items as $item) {
            $detail = new Detail_Pembelian;
            $detail->id_pembelian = $pembelian->id;
            $detail->id_game = $item->id_game;
            $detail->jumlah = $item->jumlah;
            $detail->total_harga = $item->total_harga;
            $total += $detail->total_harga;
            $detail->save();
        }
        $pembelian->total_payment = $total;
        $pembelian->save();
        return redirect()->route('pembelian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function show(Pembelian $pembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembelian $pembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembelian $pembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembelian $pembelian)
    {
        //
        $pembelian->delete();
    }
}
