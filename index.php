<?php
// Simple Router with Functions
session_start();

include('includes/server.php');


$requestUri = trim($_SERVER['REQUEST_URI'], '/');

// Remove basePath from the request URI if it exists
if (strpos($requestUri, $basePath) === 0) {
    $requestUri = substr($requestUri, strlen($basePath));
    $requestUri = trim($requestUri, '/');

}

$requestMethod = $_SERVER['REQUEST_METHOD'];



// Define route functions
function home()
{
    include('includes/server.php');
    include 'views/public/home.php';
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

function book_1()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Booking', 'url' => '/book'],
    ];


    checkStepRedirect(1);
    // echo "<script>console.log(" . json_encode($_SESSION['booking']) . ");</script>";

    include 'views/system/user/book/step1.php';
}

function book_2()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Booking', 'url' => '/book'],
    ];


    checkStepRedirect(2);
    // echo "<script>console.log(" . json_encode($_SESSION['booking']) . ");</script>";
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    include 'views/system/user/book/step2.php';
}

function book_3()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Booking', 'url' => '/book'],
    ];

    checkStepRedirect(3);
    // echo "<script>console.log(" . json_encode($_SESSION['booking']) . ");</script>";

    include 'views/system/user/book/step3.php';
}

function book_4()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Booking', 'url' => '/book'],
    ];

    checkStepRedirect(4);
    // echo "<script>console.log(" . json_encode($_SESSION['booking']) . ");</script>";

    include 'views/system/user/book/step4.php';
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




function login()
{
    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    include 'views/system/login.php';
}

function register()
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    include 'views/system/register.php';
}


function register_2()
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    include 'views/system/register2.php';
}

function logout()
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    session_unset(); // Remove all session variables
    session_destroy(); // Destroy the session
    global $basePath2;

    header("Location: " . $basePath2 . "/signin");
    exit();
}
function checkLogin()
{

    checkRole();
    if (!isset($_SESSION['user_details'])) {
        global $basePath2;

        header("Location: " . $basePath2 . "/signin");
        exit();

    }

}


function upload_insurance()
{
    include('includes/server.php');
}

function remove_insurance()
{
    include('includes/server.php');
}

function checkRole()
{
    // Ensure the 'role' session is set and is one of the valid roles
    if (isset($_SESSION['user_details']['role'])) {
        $role = $_SESSION['user_details']['role'];
        // Check for different roles
        if ($role == 1) {
            return 'admin';
        } elseif ($role == 2) {
            return 'guide';
        } elseif ($role == 3) {
            return 'user';
        }
    }


}


function geteventcalendar(): void
{
    include('includes/server.php');

}

function checkStepRedirect($required_step)
{
    global $basePath2;

    // Ensure the booking session is initialized
    if (!isset($_SESSION['booking'])) {
        $_SESSION['booking'] = [
            'step' => 1,
            'date' => null,
            'people_count' => null,
            'session' => null,
            'people' => null,
            'insurance' => null,
            'activity' => null,
            'user_id' => null,

        ];
    }

    $current_step = $_SESSION['booking']['step'];

    // Allow backward navigation, but prevent skipping steps forward
    if ($current_step < $required_step) {
        $steps = [
            1 => "/book",
            2 => "/book/people",
            3 => "/book/insurance",
            4 => "/book/summary"
        ];

        $redirect_page = $steps[$current_step] ?? "/book"; // Default to step 1 if undefined
        header("Location: " . $basePath2 . $redirect_page);
        exit();
    }
}



function deleteDirectory($dirPath)
{
    // Check if the directory exists
    if (!is_dir($dirPath)) {
        echo "<script>console.log('Directory does not exist');</script>";
        return;
    }

    // Get all files and directories in the directory
    $files = array_diff(scandir($dirPath), array('.', '..'));

    // Loop through each file/subdirectory
    foreach ($files as $file) {
        $filePath = $dirPath . DIRECTORY_SEPARATOR . $file;

        // If it's a directory, recursively delete its contents
        if (is_dir($filePath)) {
            deleteDirectory($filePath);  // Recursively delete subdirectories
        } else {
            // If it's a file, delete it
            unlink($filePath);
        }
    }

    // After deleting all files and subdirectories, delete the now-empty directory
    rmdir($dirPath);
    echo "<script>console.log('Directory and its contents deleted successfully');</script>";
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



function notFound()
{
    http_response_code(404);
    echo "404 Not Found";
    // echo $requestUri;

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




// Route Definitions
$routes = [
    '' => 'home',
    'dashboard' => 'dashboard',
    'book' => 'book_1',
    'book/date' => 'book_1',
    'book/people' => 'book_2',
    'book/insurance' => 'book_3',
    'book/summary' => 'book_4',
    'book/list' => 'book_list',
    'book/settings' => 'book_settings',
    'signin' => 'login',
    'signup' => 'register',
    'signup/details' => 'register',
    'signout' => 'logout',

    //admin
    'staff/list' => 'staff_list',
    'staff/addnew' => 'staff_addnew',


    //fucntions
    'book/events' => 'register',
    'book/upload' => 'upload_insurance',
    'book/remove' => 'remove_insurance',
    'book/getlist_user' => 'getlist',
    'book/getlist_admin' => 'getlist',
    'staff/getlist' => 'staff_getlist',

];


switch (true) {
    case isset($routes[$requestUri]):
        // Route exists, execute the corresponding function
        call_user_func($routes[$requestUri]);
        break;

    case strpos($requestUri, 'book/') === 0:
        // Split URL into parts for 'book' route
        $parts = explode('/', $requestUri);
        if (isset($parts[1]) && is_numeric($parts[1])) {
            $booking_id = $parts[1]; // Extract booking ID
            book($booking_id);
        } else {
            notFound();
        }
        break;

    case strpos($requestUri, 'staff/') === 0:
        // Split URL into parts for 'staff' route
        $parts = explode('/', $requestUri);
        if (isset($parts[1]) && is_numeric($parts[1])) {
            $staff = $parts[1]; // Extract staff ID
            staff($staff);
        } else {
            notFound();
        }
        break;

    default:
        // If none of the above conditions match, call notFound()
        notFound();
        break;
}

?>