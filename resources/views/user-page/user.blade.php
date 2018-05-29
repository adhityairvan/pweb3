@extends('user-page.layout.master-layout')
@section('title')
    User
    @endsection
@section('content')
    <div class="row">
        <div class="col-lg-6 col-12">
            <!-- small card -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>

                    <p>Penjualan</p>
                </div>
                <div class="icon">
                    <i class="fa fa-dollar"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <!-- small card -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>150</h3>

                    <p>Pembelian</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    @endsection