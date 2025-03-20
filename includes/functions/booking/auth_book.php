<?php

if (isset($_POST['acceptbooking'])) {


    $id = $_POST['id'];


    $sql = "UPDATE bookings SET status = '2' ";


    if (mysqli_query($conn, $sql)) {
        // $booking_id = mysqli_insert_id($conn); // Get the inserted person ID
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    header("Location: " . $basePath2 . "/book". "/" . $id );


}


if (isset($_POST['declinebooking'])) {


    $id = $_POST['id'];


    $sql = "UPDATE bookings SET status = '0', reason='invalid payment' ";


    if (mysqli_query($conn, $sql)) {
        // $booking_id = mysqli_insert_id($conn); // Get the inserted person ID
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    header("Location: " . $basePath2 . "/book". "/" . $id );


}


