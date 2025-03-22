<?php

function guide($guide_id)
{
    // Include the database connection
    include('includes/server.php');
    $role = checkRole();

    // // Escape the $booking_id to prevent SQL injection (if it's not already an integer)
    $guide_id = (int) $guide_id;  // Cast to integer to ensure safety

    // // Query to search for the booking_id in the bookings table
    $sql = "SELECT *
    FROM guides
    INNER JOIN booking_timeslots ON guides.timeslot_id = booking_timeslots.id
    WHERE guides.id = $guide_id";

    // // Execute the query
    $result = $conn->query($sql);

    // // Check if any rows were returned (booking found)
    if ($result->num_rows > 0) {
        // Fetch the booking details (or any data you need)
        $guide = $result->fetch_assoc();

        $date = $guide['date'];
        $session_id = $guide['timeslot_id'];

        // Query to get additional details from the booking_details table using booking_id
        $sql_details = 
        "SELECT * FROM booking_details 
        INNER JOIN bookings ON bookings.id = booking_details.booking_id
        WHERE booking_date = '$date'  AND bookings.timeslot_id = '$session_id'";
        $result_details = $conn->query($sql_details);

        // Check if booking details are found
        if ($result_details->num_rows > 0) {
            // Fetch all booking details
            $guide_details = [];
            while ($row = $result_details->fetch_assoc()) {
                $guide_details[] = $row;  // Add each booking detail to the array
            }
        } else {
            // Handle case where no details were found for the given booking_id
            $guide_details = [];
        }

    }
    // Breadcrumbs for navigation
    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Guide', 'url' => '/guide'],
        // ['title' => "$booking_id", 'url' => "/$booking_id"],
    ];

    // Include the appropriate view for displaying the booking details

    $guide_status = getGuideStatuses($guide['status']);


    if ($role === 'guide') {
        // var_dump($guide);
        // var_dump($guide_details);
        include 'views/system/guide/guide/details.php';

    } else {
        // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
        notFound();
    }
    // } else {
    //     notFound();
    // }
}


function guide_list()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Booking', 'url' => '/book'],
        ['title' => 'List', 'url' => '/book/list'],
    ];






    if ($role == 'guide') {
        include 'views/system/guide/guide/list.php';

    } else {
        // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
        notFound();
    }


}


function getGuideStatuses($num)
{

    $statusArray = [
        'cancelled',
        'not yet',
        'ongoing',
        'finished',
        'emergency',

     ];

    return $statusArray[$num];


}
