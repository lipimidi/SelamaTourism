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

    //public
    '' => 'home',
    'dashboard' => 'dashboard',

    'attractions' => 'attractions',
    'facilities' => 'facilities',
    'contactus' => 'contact',


    'email/booking/success' => 'email_booking_success',
    'email/staff/register' => 'email_staff_register',


    //system

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
    'blog/list' => 'blog_list',
    'profile' => 'profile',

    //admin
    'staff/list' => 'staff_list',
    'staff/addnew' => 'staff_addnew',
    'guide/assign' => 'guide_assign',
    'blogs/addnew' => 'blogs_addnew',
    'blogs/list' => 'blogs_list',
    'blogs' => 'blogs_list',
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
    'guide/getlist_guide_user' => 'guide_getlist',
    'guide/people_change_status' => 'guide_people_status',
    'blogs/blogs_add_new' => 'blogs_add_new',
    'blogs/blogs_getlist' => 'blogs_getlist',
    'blogs/blogs_edit' => 'blogs_edit',
    'profile/update' => 'profile_update',
    'guide/update/location' => 'guide_update_location',
    'admin/todolist' => 'admin_todolist',

    'views/update' => 'views_update',


];


switch (true) {
    case isset($routes[$requestUri]):
        // Route exists, execute the corresponding function
        call_user_func($routes[$requestUri]);
        break;

    case strpos($requestUri, 'blog/list/') === 0:
        // Split URL into parts for 'book' route
        $parts = explode('/', $requestUri);
        if (isset($parts[2]) && is_numeric($parts[2])) {
            $blog_id = $parts[2]; // Extract booking ID
            blog_list($blog_id);
        } else {
            notFound();
        }
        break;


    case strpos($requestUri, 'blog/') === 0:
        // Split URL into parts for 'book' route
        $parts = explode('/', $requestUri);
        if (isset($parts[1]) && is_numeric($parts[1])) {
            $blog_id = $parts[1]; // Extract booking ID
            blog($blog_id);
        } else {
            notFound();
        }
        break;

    case strpos($requestUri, 'blogs/') === 0:
        // Split URL into parts for 'book' route
        $parts = explode('/', $requestUri);
        if (isset($parts[2]) && is_numeric($parts[2])) {
            $blog_id = $parts[2]; // Extract booking ID
            blogs($blog_id);
        } else {
            notFound();
        }
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