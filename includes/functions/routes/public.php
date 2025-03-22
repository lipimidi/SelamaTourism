<?php


function home()
{
    include('includes/server.php');
    include 'views/public/home.php';
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




function notFound()
{
    http_response_code(404);
    echo "404 Not Found";
    // echo $requestUri;

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



function register_2()
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    include 'views/system/register2.php';
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


function getBookingStatuses($num)
{

    $statusArray = [
        'declined',
        'processing',
        'accepted',
        'ongoing',
        'finished',
        'dint attend',
        'cancelled',
        'delay',
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
