<?php

namespace App\Http\Controllers;

use App\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $games = Game::all();
        return view('admin.game')->with('games',$games);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.game.create');
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
        $game = New Game;
        $game->game_name = $request->input('game_name');
        $game->system = $request->input('system');
        $game->description = $request->input('description');
        $game->stock = 0;
        $game->game_cover = $this->upload($request,$game);
        $game->sold = 0;
        $game->save();
        return redirect()->route('game.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
        return view('admin.game.edit')->with('game',$game);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
        $game->game_name = $request->input('game_name');
        $game->system = $request->input('system');
        $game->description = $request->input('description');
        Storage::disk('public')->delete($game->game_cover);
        $game->game_cover = $this->upload($request,$game);
        $game->save();
        return redirect()->route('game.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
        Storage::disk('public')->delete($game->game_cover);
        $game->delete();
        return redirect()->route('game.index');
    }

    private function upload(Request $request,$game){
        if($request->has('game_cover')){
            $file = $request->file('game_cover');
            $filename = Carbon::now()->toDateString().$game->game_name.'.'.$file->getExtension();
            $path = $file->storeAs('game',$filename,'public');
            return $path;
        }
        return null;
    }
}
