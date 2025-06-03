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


function unAuth()
{
    http_response_code(401);
    echo "Unauthorized";
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







function dashboard()
{
    include('includes/server.php');
    checkLogin();
    $role = checkRole();

    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Dashboard', 'url' => '/dashboard'],
    ];
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    if ($role === 'admin') {

        include 'views/system/admin/dashboard.php';

    } elseif ($role == 'guide') {
        include 'views/system/guide/dashboard.php';

    } else {
        // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
        include 'views/system/user/dashboard.php';

    }
}

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

require 'vendor/autoload.php'; // Ensure Composer's autoload is included




function generateQRCodeWithLogo($data, $logoPath)
{
    $options = new QROptions([
        'outputType' => QRCode::OUTPUT_IMAGE_PNG,
        'eccLevel' => QRCode::ECC_H,
        'scale' => 10,
        'imageBase64' => false, // We will convert to base64 manually
    ]);

    // Generate the QR code image
    $qrOutputInterface = new QRCode($options);
    $qrImage = $qrOutputInterface->render($data);

    // Load the QR code and logo images
    $qrImageResource = imagecreatefromstring($qrImage);
    $logoImageResource = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'] . $logoPath);

    // Get dimensions
    $qrWidth = imagesx($qrImageResource);
    $qrHeight = imagesy($qrImageResource);
    $logoWidth = imagesx($logoImageResource);
    $logoHeight = imagesy($logoImageResource);

    // Calculate logo placement
    $logoQRWidth = $qrWidth / 5; // Logo will cover 1/5th of the QR code
    $scaleFactor = $logoWidth / $logoQRWidth;
    $logoQRHeight = $logoHeight / $scaleFactor;

    $xPos = ($qrWidth - $logoQRWidth) / 2;
    $yPos = ($qrHeight - $logoQRHeight) / 2;

    // Merge logo onto QR code
    imagecopyresampled(
        $qrImageResource,
        $logoImageResource,
        $xPos,
        $yPos,
        0,
        0,
        $logoQRWidth,
        $logoQRHeight,
        $logoWidth,
        $logoHeight
    );

    // Output QR code with logo to a string
    ob_start();
    imagepng($qrImageResource);
    $outputImage = ob_get_clean();

    // Convert to base64
    $base64 = base64_encode($outputImage);

    // Free memory
    imagedestroy($qrImageResource);
    imagedestroy($logoImageResource);

    return $base64;
}




function blog_list($page = 1)
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
    $postsPerPage = 5;
    $offset = ($page - 1) * $postsPerPage;

    // Get the total number of blog posts
    $result = $conn->query("SELECT COUNT(*) as total FROM blog");
    $totalPosts = $result->fetch_assoc()['total'];
    $totalPages = ceil($totalPosts / $postsPerPage);

    // Get the posts for the current page
    $query = "SELECT * FROM blog ORDER BY created_at DESC LIMIT $offset, $postsPerPage";
    $result = $conn->query($query);




    include 'views/public/blog/list.php';
}


function attractions()
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    include 'views/public/attractions.php';
}


function facilities()
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    include 'views/public/facilities.php';
}


function contact()
{

    include('includes/server.php');
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";

    include 'views/public/contact.php';
}


function blog($blog_id)
{
    // Include the database connection
    include('includes/server.php');
    // $role = checkRole();

    // // Escape the $booking_id to prevent SQL injection (if it's not already an integer)
    $blog_id = (int) $blog_id;  // Cast to integer to ensure safety

    // // Query to search for the booking_id in the bookings table
    $sql = "SELECT *
    FROM blog
 
    WHERE blog.id = $blog_id";

    // // Execute the query
    $result = $conn->query($sql);


    // Breadcrumbs for navigation
    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Blog', 'url' => '/blog'],
        ['title' => "$blog_id", 'url' => "/$blog_id"],
    ];


    if ($result->num_rows > 0) {
        // Fetch the booking details (or any data you need)
        $blog = $result->fetch_assoc();
        $filename = $blog['main_pic'];
        $picture = "$rootPath/assets/uploads/blogs/$blog_id/$filename";

        $title = $blog['title'];
        $content = $blog['content'];
        $created_at = $blog['created_at'];

        // Query to get additional details from the booking_details table using booking_id


        include 'views/public/blog/details.php';

    } else {
        notFound();

    }

    // // Check if any rows were returned (booking found)



    // Include the appropriate view for displaying the booking details





}


function profile()
{
    // Include the database connection
    include('includes/server.php');
    $role = checkRole();

    // // Escape the $booking_id to prevent SQL injection (if it's not already an integer)
    $user_id = $_SESSION['user_details']['id'];  // Cast to integer to ensure safety

    // // Query to search for the booking_id in the bookings table
    $sql = "SELECT users.*, user_details.* , user_role.name as role_name
    FROM users
  LEFT JOIN user_details ON user_details.user_id = users.id
  LEFT JOIN user_role ON users.role = user_role.id
    WHERE users.id = '$user_id'";

    // // Execute the query
    $result = $conn->query($sql);


    // Breadcrumbs for navigation
    $breadcrumbs = [
        ['title' => 'Home', 'url' => ''],
        ['title' => 'Profile', 'url' => '/profile'],
    ];


    if ($result->num_rows > 0) {
        // Fetch the booking details (or any data you need)
        $user = $result->fetch_assoc();


        // Query to get additional details from the booking_details table using booking_id


        include 'views/system/profile.php';

    } else {
        notFound();

    }

    // // Check if any rows were returned (booking found)



    // Include the appropriate view for displaying the booking details





}





function views_update()
{
    include('includes/server.php');





}












function email_booking_success()
{
    include('includes/server.php');

    $variables = [
        'user_email' => 'John Doe',
        'date' => 'June 5, 2025',
        'time' => '10:00 AM - 12:00 PM',
        'people' => '1',
        'id' => '1',
        'rootPath2' => $rootPath,


    ];

    extract($variables);







    
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
    include 'views/emails/booking_success.php';

}






    function email_staff_register()
{
    include('includes/server.php');

 

    $variables = array(
        "name" => "John Doe",
        "role" => "guide",
         
    );
    extract($variables);







    
    // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
    include 'views/emails/register_staff.php';

}