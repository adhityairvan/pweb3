<?php
/**
 * Created by PhpStorm.
 * User: adhityairvan
 * Date: 4/9/18
 * Time: 10:29 PM
 */

include "database.php";
session_start();
if(isset($_POST)){
    $users_id = $_SESSION['id'];
    $game_id = $_POST['game'];
    $price = $_POST['price'];
    $stock = $_POST['jumlah'];
    $extend_price = $_POST['extra'];
    $extra_desc = $_POST['deskripsi'];
    if(isset($_GET['id'])){
        $query = "UPDATE on_sale SET users_id=".$users_id.",game_id=".$game_id.",price='".$price."',extend_price='".$extend_price."',extra_desc='".$extra_desc."',stock=".$stock." WHERE id=".$_GET['id']."";
    }
    else {
        $query = "INSERT INTO on_sale (users_id,game_id,price,extend_price,extra_desc,stock) VALUES(" . $users_id . "," . $game_id . ",'" . $price . "','" . $extend_price . "','" . $extra_desc . "','" . $stock . "')";
    }
    if($conn->query($query) === TRUE){
        echo "success.";
    }
    else{
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}