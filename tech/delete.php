<?php
include "config.php";

if(isset($_GET['deleteId'])) {
    $id  = $_GET['deleteId'];

    $sql = "delete from product where ID = $id";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("location: ad.php");
    }
    else {
        die (mysqli_error($conn));
    }
}


?>

