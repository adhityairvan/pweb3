<?php
/**
 * Created by PhpStorm.
 * User: adhityairvan
 * Date: 4/9/18
 * Time: 9:57 PM
 */
include "database.php";

$ps4 = "SELECT * FROM game WHERE system='PS4'";
$xbox = "SELECT * FROM game WHERE system='XBOX'";
$all = "SELECT * FROM game";


$ps4_list = $conn->query($ps4);
$xbox_list = $conn->query($xbox);
$all_list = $conn->query($all);