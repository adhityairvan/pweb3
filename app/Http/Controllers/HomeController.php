<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ps4 = Game::where('system', 'ps4')->get();
        $xbox = Game::where('system', 'xbox')->get();
        $data = [
            'ps4' => $ps4,
            'xbox' => $xbox
        ];
        return view('home')->with('data', $data);
    }
}
