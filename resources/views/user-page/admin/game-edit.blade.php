@extends('user-page.layout.master-layout')

@section('title')
    Tambah Game Baru
@endsection
@section('assets')
    <!-- Select2 -->
    <link rel="stylesheet" href="/assets/plugins/select2/select2.min.css">
@endsection
@section('halaman_judul')
    Game Baru
@endsection
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{route('game.update',['game' => $game->id])}}" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul">Judul game</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{$game->game_name}}">
                        </div>
                        <div class="form-group">
                            <label for="system">System</label>
                            <select class="form-control" id="system" name="system">
                                <option @if($game->system == 'PS4')selected @endif value="PS4">PS4</option>
                                <option @if($game->system == 'XBOX')selected @endif value="XBOX">XBOX</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$game->description}}">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stok" disabled value="{{$game->penjualan->count()}}">
                        </div>
                        <div class="form-group">
                            <label for="img">Main Image</label>
                            <input type="file" class="form-control" id="img" name="img">
                        </div>
                        <div class="form-group">
                            <label for="multi">Alt Image</label>
                            <input type="file" class="form-control" id="" name="multi[]" multiple>
                        </div>
                    </div>
                {{csrf_field()}}
                <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        @endsection
        @section('script')
            <script>
                $(document).ready(function() {
                    $('.select2').select2();
                });
            </script>
@endsection