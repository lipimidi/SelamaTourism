<?php

function guide($guide_id)
{
    // Include the database connection
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    // // Escape the $booking_id to prevent SQL injection (if it's not already an integer)
    $guide_id = (int) $guide_id;  // Cast to integer to ensure safety

    // // Query to search for the booking_id in the bookings table
    $sql = "SELECT guides.*, booking_timeslots.* , user_details.name , user_details.image
    FROM guides
    INNER JOIN booking_timeslots ON guides.timeslot_id = booking_timeslots.id
    LEFT JOIN user_details ON guides.user_id = user_details.user_id
    WHERE guides.id = $guide_id";

    // // Execute the query
    $result = $conn->query($sql);

    // // Check if any rows were returned (booking found)
    if ($result->num_rows > 0) {
        // Fetch the booking details (or any data you need)
        $guide = $result->fetch_assoc();
        $date = $guide['date'];
        $session_id = $guide['timeslot_id'];
        $user_id = $guide['user_id'];
        $user_id2 = $_SESSION['user_details']['id'];
        // Query to get additional details from the booking_details table using booking_id



        if ($role == 'user') {

            $sql_details =
                "SELECT guide_details.* ,bookings.user_id 
            FROM guide_details 
            INNER JOIN guides ON guide_details.guide_id = guides.id
INNER JOIN bookings ON bookings.id = guide_details.booking_id
            WHERE guides.date = '$date' 
            AND guides.timeslot_id = '$session_id' 
                         AND bookings.user_id  = '$user_id2'

            ";
        } else {
            $sql_details =
                "SELECT guide_details.* ,bookings.user_id  
            FROM guide_details 
            INNER JOIN guides ON guide_details.guide_id = guides.id
INNER JOIN bookings ON bookings.id = guide_details.booking_id
            WHERE guides.date = '$date' 
            AND guides.timeslot_id = '$session_id' ";
        }


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
        ['title' => "$guide_id", 'url' => "/$guide_id"],
    ];

    // Include the appropriate view for displaying the booking details

    $guide_status = getGuideStatuses($guide['status']);




    if ($role == 'admin') {
        // var_dump($guide);
        // var_dump($guide_details);
        include 'views/system/admin/guide/details.php';

    } elseif ($role == 'guide') {
        // var_dump($guide);
        // var_dump($guide_details);
        if ($user_id != $_SESSION['user_details']['id']) {
            unAuth();
        } else {






            

            include 'views/system/guide/guide/details.php';
        }

    } else {

           
                     
        include 'views/system/user/guide/details.php';

        // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
        // notFound();
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
        ['title' => 'Guide', 'url' => '/guide'],
        ['title' => 'List', 'url' => '/guide/list'],
    ];




    if ($role == 'admin') {
        include 'views/system/admin/guide/list.php';

    } elseif ($role == 'guide') {
        include 'views/system/guide/guide/list.php';

    } else {
        // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
        // notFound();

        include 'views/system/user/guide/list.php';

    }


}

function guide_getlist()
{
    include('includes/server.php');
}

function guide_people_status()
{
    include('includes/server.php');
}



function guide_update_location()
{
    include('includes/server.php');
}

