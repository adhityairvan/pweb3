<?php
/**
 * Created by PhpStorm.
 * User: adhityairvan
 * Date: 4/9/18
 * Time: 9:31 PM
 */

include "database.php";

session_start();
if(!empty($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT username, password, id FROM users WHERE username = '".$username."'";
    $result = $conn->query($query);
    if($result->num_rows>0){
        $row = $result->fetch_assoc();
    }
    else{
        echo "Wrong username";
    }
    echo md5($password);
    if($row['password'] == md5($password)){
        $_SESSION['username']=$username;
        $_SESSION['id'] = $row['id'];
        if (isset($_POST['remember'])){
            $cookie_name = 'cookie_user';
            $cookie_value = randomString(10);
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

            $query = "UPDATE users SET cookie='".$cookie_value."' WHERE username='".$username."'";
            $conn->query($query);

        }
        echo $_SESSION['username'];
    }
    else{
        echo "gagal!";
    }
}

function randomString($length = 6) {
    $str = "";
    $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}