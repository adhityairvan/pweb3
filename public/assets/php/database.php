<?php
/**
 * Created by PhpStorm.
 * User: adhityairvan
 * Date: 4/9/18
 * Time: 8:52 PM
 */

$username = "root";
$password = "root";
$server = "localhost";
$database = "pweb";

$conn = new mysqli($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_errno);
}
?>
