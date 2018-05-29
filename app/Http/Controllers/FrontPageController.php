<?php

namespace App\Http\Controllers;

use App\Penjualan;
use Illuminate\Http\Request;
use App\Game;

class FrontPageController extends Controller
{
    //
    public function showPS4(){
        $games = Game::where('system','ps4')->get();
        return view('ps4-list','games',$games);
    }

    public function showXBOX(){
        $games = Game::where('system','xbox')->get();
        return view('xbox-list','games',$games);
    }

    public function index () {
        $ps4 = Penjualan::where('system', 'ps4')->latest()->groupBy('game_name')->limit(4)->get();
        $xbox = Penjualan::where('system', 'xbox')->latest()->groupBy('game_name')->limit(4)->get();
        $data = [
            'ps4' => $ps4,
            'xbox' => $xbox
        ];
        return view('welcome')->with('data', $data);
    }


}
