<?php


if ( isset($_POST['confirmpeople'])) {

    $_SESSION['booking']['step'] =3;

    $_SESSION['booking']['people'] = [];
    $count = $_SESSION['booking']['people_count'];


    for ($i = 1; $i <= $count; $i++) {
        // Collect the form data for each person and store it in the session
        $_SESSION['booking']['people'][$i] = [
            'name' => $_POST["name-$i"] ?? '',
            'ic' => $_POST["ic-$i"] ?? '',
            'phone' => $_POST["phone-$i"] ?? '',
            'email' => $_POST["email-$i"] ?? '',
            'address' => $_POST["address-$i"] ?? ''
        ];
    }


    header("Location: " . $basePath2 . "/book/people");

    
    // echo "<script>console.log(" . json_encode($_POST) . ");</script>";
    echo "<script>console.log(" . json_encode($_SESSION['booking']) . ");</script>";
 

    // echo $_SESSION['session'];

}