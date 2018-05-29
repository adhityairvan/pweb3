@extends('layouts.master-layout')

@section('assets')
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style_katalog.css">
  <link rel="stylesheet" type="text/css" href="assets/css/navi.css">
    @endsection

@section('title')
    Katalog
    @endsection

@section('content')
  <div class="wrapper2">
    <!-- <div class="content"> -->
      <div class="side_bar">
      <a href="">PS4</a>
      <a href="">XBOX</a>
    </div>
    <div class="content">
      <!-- <div class="content_tools">
        search, filter, dll.
      </div> -->
      <div class="content_items">
        <!-- isi -->
        <div class="content_box" style=" background-image: url(img/cover_jjt.jpg);">
          <div class="content_title">
            <span>Lord of the Rings - The Fellowship of the Ring</span>
          </div>
        </div>
        <div class="content_box ps4" style=" background-image: url(img/destiny.jpg);">
          <div class="content_title">
            <span>Destiny</span>
          </div>
        </div>
        <div class="content_box xbox" style=" background-image: url(img/wolfenstein.jpg);">
          <div class="content_title">
            <span>Wolfenstein</span>
          </div>
        </div>
        



        <!-- ____ -->
      </div>
    <!-- </div> -->
  </div>
@endsection
@section('script')
<script>
    $(function() {
      var redirectTo = function(address) {
        document.location.href = address;
      }

      $('.content_box').click(function() {
        redirectTo("buku.php");
      });

      $('.content_box').hover(function() {
        $(this).find('.content_title').show();
      });
      $('.content_box').mouseleave(function() {
        $(this).find('.content_title').hide();
      });

      $('.cart').click(function() {
        redirectTo("cart.php");
      });
    })

  </script>
  @endsection