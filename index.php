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
    'guide/assign' => 'guide_assign',
    //'guide/list' => 'guide_list',

    //admin_guide
    'guide/list' => 'guide_list',


    //fucntions
    'book/events' => 'book_1a',
    'book/upload' => 'upload_insurance',
    'book/remove' => 'remove_insurance',
    'book/getlist_user' => 'getlist',
    'book/getlist_admin' => 'getlist',
    'staff/getlist' => 'staff_getlist',
    'guide/getlist_guide' => 'guide_getlist',
    'guide/people_change_status' => 'guide_people_status',

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

        case strpos($requestUri, 'guide/') === 0:
            // Split URL into parts for 'staff' route
            $parts = explode('/', $requestUri);
            if (isset($parts[1]) && is_numeric($parts[1])) {
                $guide = $parts[1]; // Extract staff ID
                guide($guide);
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