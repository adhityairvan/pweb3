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
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul">Judul game</label>
                            <input type="text" class="form-control" id="" name="judul">
                        </div>
                        <div class="form-group">
                            <label for="system">System</label>
                            <input type="text" class="form-control" id="" name="system">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" id="" name="deskripsi">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="text" class="form-control" id="" name="stok">
                        </div>
                        <div class="form-group">
                            <label for="img">Main Image</label>
                            <input type="file" class="form-control" id="" name="img">
                        </div>
                        <div class="form-group">
                            <label for="multi">Alt Image</label>
                            <input type="file" class="form-control" id="" name="multi[]" multiple>
                        </div>
                    </div>
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