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


            $sql = "SELECT users.id , username , name
    FROM users
    INNER JOIN user_details ON user_details.user_id = users.id
     WHERE role = '2'";
    $result = $conn->query($sql);

    // Check if booking details are found
    if ($result->num_rows > 0) {
        // Fetch all booking details
        $guides = [];
        while ($row = $result->fetch_assoc()) {
            $guides[] = $row;  // Add each booking detail to the array
        }
    }

        include 'views/system/admin/dashboard.php';

    } elseif ($role == 'guide') {
        include 'views/system/guide/dashboard.php';

    } else {
        // echo "<script>console.log(" . json_encode($_SESSION['user_details']) . ");</script>";
        include 'views/system/user/dashboard.php';

    }
}



require 'vendor/autoload.php'; // Ensure Composer's autoload is included





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
    checkLogin();
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








