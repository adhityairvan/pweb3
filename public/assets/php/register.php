<?php
/**
 * Created by PhpStorm.
 * User: adhityairvan
 * Date: 4/9/18
 * Time: 8:58 PM
 */
include "database.php";

session_start();

if(!empty($_POST)){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['number'];
    $file = $_FILES['image']['tmp_name'];
    if(isset($file)){
        $image = addslashes(file_get_contents($file));
        $query = "INSERT INTO users (username,password,alamat,nohp,email,image) VALUES('".$username."','".$password."','".$alamat."','".$nohp."','".$email."','".$image."')";
    }
    else{
        $query = "INSERT INTO users (username,password,alamat,nohp,email) VALUES('".$username."','".$password."','".$alamat."','".$nohp."','".$email."')";
    }

    if($conn->query($query) === TRUE){
        echo "success!";
    }
    else{
        echo "Error: " . $query . "<br>" . $conn->error;
    }

}
else {
    echo "Post empty";
}

