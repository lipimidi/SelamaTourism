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
        echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

        include 'views/system/user/dashboard.php';

    } else {
        echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
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
    echo "<script>console.log(" . json_encode($_SESSION['booking']) . ");</script>";

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
    echo "<script>console.log(" . json_encode($_SESSION['booking']) . ");</script>";
    echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

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
    echo "<script>console.log(" . json_encode($_SESSION['booking']) . ");</script>";

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
    echo "<script>console.log(" . json_encode($_SESSION['booking']) . ");</script>";

    include 'views/system/user/book/step4.php';
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
    echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    session_unset(); // Remove all session variables
    session_destroy(); // Destroy the session
         global $basePath2;  

    header("Location: " . $basePath2 . "/signin");
 }
function checkLogin()
{


    if (!isset($_SESSION['user_details'])) {
         global $basePath2;  

        header("Location: " . $basePath2 . "/signin");
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







function notFound($requestUri)
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
    'signin' => 'login',
    'signup' => 'register',
    'signup/details' => 'register',
    'signout' => 'logout',


    'book/events' => 'register',
    'book/upload' => 'upload_insurance',
    'book/remove' => 'remove_insurance',

];



if (isset($routes[$requestUri])) {
    call_user_func($routes[$requestUri]);
} else {
    notFound($requestUri);
}
?>