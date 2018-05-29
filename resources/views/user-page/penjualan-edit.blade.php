@extends('user-page.layout.master-layout')

@section('title')
Tambah Jualan Baru
@endsection
@section('assets')
<!-- Select2 -->
<link rel="stylesheet" href="/assets/plugins/select2/select2.min.css">
@endsection
@section('halaman_judul')
Penjualan Baru
@endsection
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Penjualan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{route('penjualan.update',['penjualan' => $penjualan->id])}}">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_game">Game</label>
                        <select id="id_game" class="form-control select2" name="id_game" style="width: 100%;">
                            <optgroup label="PS4">
                                <option value="0">test</option>
                            </optgroup>
                            <optgroup label="XBOX">
                                <option value="1">test2</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga per Hari</label>
                        <input type="number" class="form-control" id="harga" placeholder="harga" name="harga" value="{{$penjualan->harga}}">
                    </div>
                    <div class="form-group">
                        <label for="harga_extend">Harga Extend</label>
                        <input type="number" class="form-control" id="harga_extend" placeholder="harga" name="harga_extend" value="{{$penjualan->harga_extend}}">
                    </div>
                    <div class="form-group">
                        <label for="extra_desc">Isi Deskripsi Extra</label>
                        <input type="text" class="form-control" id="extra_desc" name="extra_desc" value="{{$penjualan->extra_desc}}">
                    </div>
                </div>
                <!-- /.card-body -->
                {{csrf_field()}}
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