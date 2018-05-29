@extends('user-page.layout.master-layout')
@section('title')
    Penjualan
@endsection
@section('assets')
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection
@section('halaman_judul')
    Game
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Simple Full Width Table</h3>
                    <div class="card-tools">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            <li class="page-item"><a href="{{route('game.create')}}" class="page-link"><button type="button" class="btn btn-outline-primary"><span class="fa fa-plus"></span></button></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th style="width: 400px">Judul Game</th>
                            <th style="width: 200px">System</th>
                            <th style="width: 80px">Stock</th>
                            <th colspan="2" class="text-center">Manage</th>
                        </tr>
                        @foreach($games as $game)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$game->game_name}}</td>
                                <td>{{$game->system}}</td>
                                <td>{{$game->penjualan->count()}}</td>
                                <td class="text-center">
                                    <a href="game/{{$game->id}}/edit">
                                        <button type="button" class="btn btn-block btn-outline-warning"><span class="fa fa-edit"></span></button>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="#">
                                        <button type="button" class="btn btn-block btn-outline-danger"><span class="fa fa-trash"></span></button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    </div>
@endsection