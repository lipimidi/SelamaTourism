<?php

if (isset($_POST['acceptbooking'])) {

    $id = $_POST['id'];
    $booking_date = $_POST['booking_date'];
    $timeslot_id = $_POST['timeslot_id'];
    $time = $_POST['time'];
    $people = $_POST['people'];
    $user_email = $_POST['email'];

    $sql = "UPDATE bookings SET status = '2'  WHERE id ='$id' ";
    mysqli_query($conn, $sql);

    // Step 1: Check if the same booking_date and timeslot_id exist in the guides table
    $check_sql = "SELECT id FROM guides WHERE `date` = '$booking_date' AND `timeslot_id` = '$timeslot_id'";
    $check_result = mysqli_query($conn, $check_sql);
    $guide_id = null;

    if (mysqli_num_rows($check_result) == 0) {
        // Step 2: Insert new guide
        $insert_sql = "INSERT INTO guides (`date`, `timeslot_id`)
                       SELECT `booking_date`, `timeslot_id`
                       FROM bookings
                       WHERE id = '$id'";

        if (mysqli_query($conn, $insert_sql)) {
            $guide_id = mysqli_insert_id($conn); // 
        } else {
            echo "Error inserting into guides: " . mysqli_error($conn);
        }
    } else {
        $row = mysqli_fetch_assoc($check_result);
        $guide_id = $row['id']; // 
    }

    // Step 3: Insert into guide_details with guide_id
    $select_sql = "SELECT `booking_id`, `name`, `ic`, `phone`, `address`, `email`, `file`
                   FROM booking_details
                   WHERE booking_id = '$id'";
    $select_result = mysqli_query($conn, $select_sql);

    while ($row = mysqli_fetch_assoc($select_result)) {
        $insert_detail_sql = "INSERT INTO guide_details 
            (`guide_id`, `booking_id`, `name`, `ic`, `phone`, `address`, `email`, `file`)
            VALUES 
            ('$guide_id', '" . $row['booking_id'] . "', '" . $row['name'] . "', '" . $row['ic'] . "', '" . $row['phone'] . "', '" . $row['address'] . "', '" . $row['email'] . "', '" . $row['file'] . "')";

        if (!mysqli_query($conn, $insert_detail_sql)) {
            echo "Error inserting into guide_details: " . mysqli_error($conn);
        }

    $variables = [
        'user_email' => $user_email,
        'date' => $booking_date,
        'time' => $time,
        'people' => $people,
        'id' => $id,
    ];


    sendEmail($user_email, "Booking Success", 'booking_success',$variables);

    }




    // Redirect
    header("Location: " . $basePath2 . "/book" . "/" . $id);
    exit();
}



if (isset($_POST['declinebooking'])) {


    $id = $_POST['id'];

    $timeslot_id = $_POST['timeslot_id'];

    $sql = "UPDATE bookings SET status = '0', reason='invalid details'  WHERE id ='$id' ";


    if (mysqli_query($conn, $sql)) {
        // $booking_id = mysqli_insert_id($conn); // Get the inserted person ID
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    header("Location: " . $basePath2 . "/book" . "/" . $id);


}


