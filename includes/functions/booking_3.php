<?php


if ( isset($_POST['confirminsurance'])) {
    echo "<script>console.log(" . json_encode($_POST) . ");</script>";
 
    $_SESSION['booking']['acivity'] =$_POST['activities'];

}