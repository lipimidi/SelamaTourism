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

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Dashboard', 'url' => '/dashboard'],
    ];

    if (!isAdmin()) {
        // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

        include 'views/system/user/dashboard.php';

    } else {
        // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
        include 'views/system/admin/dashboard.php';

    }
}

function book_1()
{
    include('includes/server.php');
    checkLogin();

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

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Booking', 'url' => '/book'],
        ['title' => 'List', 'url' => '/book/list'],
    ];

 

    include 'views/system/user/book/list.php';
}


function book($booking_id)
{
    // Include the database connection
    include('includes/server.php');

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
        include 'views/system/user/book/details.php';
    } else{
        notFound();
    }
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

function isAdmin()
{

    return (isset($_SESSION['role']) && $_SESSION['role'] === 'admin');
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



function notFound()
{
    http_response_code(404);
    echo "404 Not Found";
    // echo $requestUri;

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
    'signin' => 'login',
    'signup' => 'register',
    'signup/details' => 'register',
    'signout' => 'logout',

//fucntions
    'book/events' => 'register',
    'book/upload' => 'upload_insurance',
    'book/remove' => 'remove_insurance',
    'book/getlist_user' => 'getlist',

];



if (isset($routes[$requestUri])) {
    call_user_func($routes[$requestUri]);
} elseif (strpos($requestUri, 'book/') === 0) {
    // Split URL into parts
    $parts = explode('/', $requestUri);

    // Ensure it has at least 3 parts: ['product', ID, Name]
    if (isset($parts[1]) && is_numeric($parts[1])) {
        $booking_id = $parts[1]; // Extract product ID

        book($booking_id);
    } else {
        notFound();
    }
} else {
    notFound();
}
?>