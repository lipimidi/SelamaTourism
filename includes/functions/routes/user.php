<?php

function book_1a()
{
    include('includes/server.php');
 
}


function book_1()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
                ['title' => 'Home', 'url' => '/dashboard'],
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
                ['title' => 'Home', 'url' => '/dashboard'],
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
                ['title' => 'Home', 'url' => '/dashboard'],
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
                ['title' => 'Home', 'url' => '/dashboard'],
        ['title' => 'Booking', 'url' => '/book'],
    ];

    checkStepRedirect(4);
    // echo "<script>console.log(" . json_encode($_SESSION['booking']) . ");</script>";

    include 'views/system/user/book/step4.php';
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



function upload_insurance()
{
    include('includes/server.php');
}

function remove_insurance()
{
    include('includes/server.php');
}



function geteventcalendar()
{
    include('includes/server.php');

}

 