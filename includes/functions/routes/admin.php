<?php


function staff($staff_id)
{
    // Include the database connection
    include('includes/server.php');
    $role = checkRole();

    // Escape the $booking_id to prevent SQL injection (if it's not already an integer)
    $staff_id = (int) $staff_id;  // Cast to integer to ensure safety

    // // Query to search for the booking_id in the bookings table
    $sql = "SELECT users.id,username, email,role, user_details.name,ic,passport,address,phone, user_role.name as rolename
    FROM users
    INNER JOIN user_details ON user_details.user_id = users.id
    INNER JOIN user_role ON user_role.id = users.role
    WHERE users.id = $staff_id";

    // // Execute the query
    $result = $conn->query($sql);

    // // Check if any rows were returned (booking found)
    if ($result->num_rows > 0) {
        //     // Fetch the booking details (or any data you need)
        $staff = $result->fetch_assoc();

        //     // Query to get additional details from the booking_details table using booking_id
        //     $sql_details = "SELECT * FROM booking_details WHERE booking_id = $booking_id ORDER BY id ASC ";
        //     $result_details = $conn->query($sql_details);

        //     // Check if booking details are found
        //     if ($result_details->num_rows > 0) {
        //         // Fetch all booking details
        //         $booking_details = [];
        //         while ($row = $result_details->fetch_assoc()) {
        //             $booking_details[] = $row;  // Add each booking detail to the array
        //         }
        //     } else {
        //         // Handle case where no details were found for the given booking_id
        //         $booking_details = [];
    }

    // Breadcrumbs for navigation
    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Staff', 'url' => '/staff'],
        ['title' => "$staff_id", 'url' => "/$staff_id"],
    ];

    //     // Include the appropriate view for displaying the booking details

    //     $booking_status = getBookingStatuses($booking['status']);


    if ($role === 'admin') {

        include 'views/system/admin/staff/details.php';

    } else {
        // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
        notFound();

    }
    // } else {
    //     notFound();
    // }
}




function book($booking_id)
{
    // Include the database connection
    include('includes/server.php');
    $role = checkRole();

    // Escape the $booking_id to prevent SQL injection (if it's not already an integer)
    $booking_id = (int) $booking_id;  // Cast to integer to ensure safety

    // Query to search for the booking_id in the bookings table
    $sql = "SELECT bookings.*, booking_timeslots.start_time,booking_timeslots.end_time
    FROM bookings
    INNER JOIN booking_timeslots ON bookings.timeslot_id = booking_timeslots.id
    WHERE bookings.id = $booking_id";

    // Execute the query
    $result = $conn->query($sql);

    // Check if any rows were returned (booking found)
    if ($result->num_rows > 0) {
        // Fetch the booking details (or any data you need)
        $booking = $result->fetch_assoc();

        // Query to get additional details from the booking_details table using booking_id
        $sql_details = "SELECT * FROM booking_details WHERE booking_id = $booking_id ORDER BY id ASC ";
        $result_details = $conn->query($sql_details);

        // Check if booking details are found
        if ($result_details->num_rows > 0) {
            // Fetch all booking details
            $booking_details = [];
            while ($row = $result_details->fetch_assoc()) {
                $booking_details[] = $row;  // Add each booking detail to the array
            }
        } else {
            // Handle case where no details were found for the given booking_id
            $booking_details = [];
        }

        // Breadcrumbs for navigation
        $breadcrumbs = [
            ['title' => 'Home', 'url' => ''],
            ['title' => 'Booking', 'url' => '/book'],
            ['title' => "$booking_id", 'url' => "/$booking_id"],
        ];

        // Include the appropriate view for displaying the booking details

        $booking_status = getBookingStatuses($booking['status']);


        if ($role === 'admin') {

            include 'views/system/admin/book/details.php';

        } else {
            // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
            include 'views/system/user/book/details.php';

        }
    } else {
        notFound();
    }
}
function book_list()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Booking', 'url' => '/book'],
        ['title' => 'List', 'url' => '/book/list'],
    ];






    if ($role === 'admin') {

        include 'views/system/admin/book/list.php';

    } elseif ($role == 'guide') {
        include 'views/system/guide/book/list.php';

    } else {
        // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
        include 'views/system/user/book/list.php';

    }


}

function book_settings()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Booking', 'url' => '/book'],
        ['title' => 'Settings', 'url' => '/book/settings'],
    ];






    if ($role === 'admin') {

        include 'views/system/admin/book/settings.php';

    } else {
        // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
        notFound();
    }


}

function getlist()
{
    include('includes/server.php');
}



function getBookingStatuses($num)
{

    $statusArray = [
        'declined',
        'processing',
        'accepted',
        'ongoing',
        'finished',
        'dint attend',
        'emergency',
    ];

    return $statusArray[$num];


}

function getHikingStatuses($num)
{

    $statusArray = [
        'not yet',
        'ongoing',
        'finished',
        'dint attend',
        'missing',
    ];

    return $statusArray[$num];


}






function staff_list()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Staff', 'url' => '/staff'],
        ['title' => 'List', 'url' => '/staff/list'],
    ];






    if ($role === 'admin') {

        include 'views/system/admin/staff/list.php';

    } else {
        // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
        notFound();

    }


}



function staff_getlist()
{
    include('includes/server.php');
}


function staff_addnew()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Staff', 'url' => '/staff'],
        ['title' => 'Add', 'url' => '/staff/addnew'],
    ];


    $sql = "SELECT *
    FROM user_role
     WHERE id != '3'";
    $result = $conn->query($sql);

    // Check if booking details are found
    if ($result->num_rows > 0) {
        // Fetch all booking details
        $role_details = [];
        while ($row = $result->fetch_assoc()) {
            $role_details[] = $row;  // Add each booking detail to the array
        }
    }


    if ($role === 'admin') {

        include 'views/system/admin/staff/addnew.php';

    } else {
        // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
        notFound();

    }


}



function dashboard()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Dashboard', 'url' => '/dashboard'],
    ];
    echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    if ($role === 'admin') {

        include 'views/system/admin/dashboard.php';

    } elseif ($role == 'guide') {
        include 'views/system/guide/dashboard.php';

    } else {
        // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
        include 'views/system/user/dashboard.php';

    }
}

