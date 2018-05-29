@extends('layouts.master-layout')

@section('assets')
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style_cart.css">
  <link rel="stylesheet" type="text/css" href="assets/css/navi.css">
    @endsection

@section('title')
    Shopping Cart
    @endsection

@section('content')
  <!-- <div class="wrapper"> -->
    <div class="content">
      <h1>Shopping Cart Checkout</h1>
      <form class="form" action="/action_page.php">
      <div class="form-group">
      <label class="control-label col-sm-2" for="">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="" placeholder="Enter email" name="email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="">Alamat</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" id="" placeholder="Enter Alamat" name="alamat">
        </div>
      </div>
      <div class="form-group">
        <label for="sel1">Select list:</label>
        <select class="form-control" id="sel1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="">Total</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="" placeholder="" name="total_payment">
        </div>
      </div>
    </div>
  <!-- </div> -->
@endsection