<?php

namespace App\Http\Controllers;

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

}
