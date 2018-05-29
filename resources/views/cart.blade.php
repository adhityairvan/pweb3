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
      <h1>Shopping Cart</h1>
      <table class="table table-striped" style="background-color: white;">
        <thead>
          <tr>
            <th>Image</th>
            <th>Nama</th>
            <th>Platform</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>tes</td>
            <td>tes</td>
            <td>tes</td>
            <td>tes</td>
          </tr>
          <tr>
            <td>tes</td>
            <td>tes</td>
            <td>tes</td>
            <td>tes</td>
          </tr>
          <tr>
            <td>tes</td>
            <td>tes</td>
            <td>tes</td>
            <td>tes</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3">Total</td>
            <td>303030030</td>
          </tr>
        </tfoot>
      </table>
      <button type="button" class="btn btn-primary Checkout">Proceed Checkout</button>
    </div>
  <!-- </div> -->
@endsection