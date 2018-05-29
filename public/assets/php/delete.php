<?php
/**
 * Created by PhpStorm.
 * User: adhityairvan
 * Date: 4/12/18
 * Time: 7:33 PM
 */
include "database.php";

if(isset($_GET['id'])){
    $query = "DELETE FROM on_sale WHERE id=".$_GET['id'];
    $result = $conn->query($query);
    if($result){
        echo "success";
    }
    else{
        echo "failed";
    }

}
else{
    echo "No id specified";
}
