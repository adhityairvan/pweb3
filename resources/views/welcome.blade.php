@extends('layouts.master-layout')
@section('assets')
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    @endsection

@section('title')
    Welcome!
    @endsection

@section('content')
    <!-- Description -->

    <section class="description">
        <div class="buyer">
            <H3>Ingin menyewa?</H3>
            <ul>
                <li>Lorem ipsum!</li>
                <li>Lorem ipsum!</li>
                <li>Lorem ipsum!</li>
                <li>Lorem ipsum!</li>
            </ul>
            <a href="#" class="btn">Games</a>
        </div>
        <div class="seller">
            <h3>Punya banyak game?</h3>
            <ul>
                <li>Lorem ipsum!</li>
                <li>Lorem ipsum!</li>
                <li>Lorem ipsum!</li>
                <li>Lorem ipsum!</li>
            </ul>
            <a href="#" class="btn">Sell</a>
        </div>
    </section>

    <!-- End Description -->

    <!-- Game list -->
    <section class="game-list ps4-color" id="ps4">
        <div class="ps4">
            <img src="src/PlayStation_4_-_Logo.svg.png">
            <H3>Playstation 4</H3>
            <a href="#" class="btn">More Games</a>
        </div>
        <div class="ps4-games">
            <ul>
                <li>
                <div class="ps4-item">
                    <img src="">
                    <h4>Judul</h4>
                    <p>Mulai dari 50Credit</p>
                    <p>50 Penjual</p>
                    <a href="#" class="btn">Judul</a>
                </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="game-list xbox-color" id="xbox">
        <div class="xbox">
            <img src="src/Xbox-One-X_2017_Horizontal.png">
            <h3>XBOX One</h3>
            <a href="#" class="btn">More Games</a>
        </div>
        <div class="xbox-games">
            <ul>
                <li>
                <div class="xbox-item">
                    <img src="">
                    <h4>judul</h4>
                    <p>Mulai dari 50Credit</p>
                    <p>50 Penjual</p>
                    <a href="#" class="btn">Judul</a>
                </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- End Game list -->

    <!-- Latest added -->
    <h2>Latest Games Added</h2>
    <section class="latest">
        <ul>
            <li>
            <div class="latest-item">
                <img src="">
                <h4>Judul</h4>
                <p>Mulai dari 50Credit</p>
                <p>100 Penjual</p>
                <a href="#" class="btn">Judul</a>
            </div>
            </li>
        </ul>
    </section>

    @endsection