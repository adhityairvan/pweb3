@extends('user-page.layout.master-layout')
@section('title')
    Penjualan
@endsection
@section('assets')
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection
@section('halaman_judul')
    Penjualan
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
                            <li class="page-item"><a href="#" class="page-link"><button type="button" class="btn btn-outline-primary"><span class="fa fa-plus"></span></button></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th style="width: 80px">User</th>
                            <th style="width: 400px">Judul Game</th>
                            <th style="width: 200px">System</th>
                            <th style="width: 200px">Harga</th>
                            <th style="width: 200px">Tanggal Masuk</th>
                            <th colspan="2" class="text-center">Manage</th>
                        @foreach($penjualan as $jual)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$jual->penjual->username}}</td>
                                <td>{{$jual->game->game_name}}</td>
                                <td>{{$jual->game->system}}</td>
                                <td>Rp {{$jual->harga}},-</td>
                                <td>{{$jual->created_at->format('d M Y')}}</td>
                                <td class="text-center">
                                    <a href="#">
                                        <button type="button" class="btn btn-block btn-outline-danger"><span class="fa fa-trash"></span></button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>2</td>
                            <td>God of War</td>
                            <td>PS4</td>
                            <td>Rp 15.000,-</td>
                            <td>Belum Terjual</td>
                            <td>tes</td>
                            <td class="text-center">
                                <a href="strivia/edit">
                                    <button type="button" class="btn btn-block btn-outline-warning"><span class="fa fa-edit"></span></button>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="#">
                                    <button type="button" class="btn btn-block btn-outline-danger"><span class="fa fa-trash"></span></button>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Cron job running</td>
                            <td>
                                tes
                            </td>
                            <td>adsads</td>
                        </tr>
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