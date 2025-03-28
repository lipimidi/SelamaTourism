<?php

if (isset($_POST['acceptbooking'])) {


    $id = $_POST['id'];


    $sql = "UPDATE bookings SET status = '2' , reason='' WHERE id ='$id' ";


    if (mysqli_query($conn, $sql)) {
        // $booking_id = mysqli_insert_id($conn); // Get the inserted person ID

    $sql_2 = "UPDATE booking_details SET status = '2'   WHERE id ='$id' ";
    mysqli_query($conn, $sql_2);


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    header("Location: " . $basePath2 . "/book". "/" . $id );


}


if (isset($_POST['declinebooking'])) {


    $id = $_POST['id'];


    $sql = "UPDATE bookings SET status = '0', reason='invalid details'  WHERE id ='$id' ";


    if (mysqli_query($conn, $sql)) {
        // $booking_id = mysqli_insert_id($conn); // Get the inserted person ID
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    header("Location: " . $basePath2 . "/book". "/" . $id );


}


